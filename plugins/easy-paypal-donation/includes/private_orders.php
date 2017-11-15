<?php

function wpedon_plugin_orders() {

	if (!isset($_GET['action']) || $_GET['action'] == "delete" || $_GET['action2'] == "delete") {

		class wpedon_button_orders_table extends WP_List_Table {
			
			
			function get_data() {
				global $wp_query;
				
				$args = array(
					'post_type' => 'wpplugin_don_order',
					'posts_per_page' => -1,
					'order' => 'DESC',
					'orderby' => 'ID'
				);
				
				$posts = get_posts($args);
				
				$count = "0";
				foreach ($posts as $post) {
					
					$id = 				esc_attr($posts[$count]->ID);
					$post_title = 		esc_attr($posts[$count]->post_title);
					$post_date = 		esc_attr($posts[$count]->post_date);
					$item_number = 		esc_attr(get_post_meta($id,'wpedon_button_item_number',true));
					$payment_status = 	esc_attr(get_post_meta($id,'wpedon_button_payment_status',true));
					$payment_amount = 	esc_attr(get_post_meta($id,'wpedon_button_payment_amount',true));
					$payer_email = 		esc_attr(get_post_meta($id,'wpedon_button_payer_email',true));
					$payment_cycle = 	esc_attr(get_post_meta($id,'wpedon_button_payment_cycle',true));
					
					
					$order = $id;
					$item = $post_title."<br />".$item_number;
					
					$payment_amount = $payment_amount."<br />".$payment_cycle;
					$status = $payment_status."<br />".$payer_email;
					
					$data[] = array(
						'ID' => $id,
						'order' => $order,
						'item' => $item,
						'amount' => $payment_amount,
						'status' => $status,
						'date' => $post_date
					);
					
					$count++;
				}
				
				if (empty($data)) {
					$data = array();
				}
				
				return $data;
			}
			
			
			
			function __construct() {
				global $status, $page;
				
				parent::__construct( array(
					'singular'  => 'order',
					'plural'    => 'orders',
					'ajax'      => false
				) );
			}


			function column_default($item, $column_name) {
				switch($column_name){
					case 'order':
					case 'amount':
					case 'status':
					case 'date':
						return $item[$column_name];
					default:
						return print_r($item,true);
				}
			}
			
			function column_order($item){
			
				// view
				$view_bare = '?page=wpedon_menu&action=view&order='.$item['ID'];
				$view_url = wp_nonce_url($view_bare, 'view_'.$item['ID']);
				
				// delete
				$delete_bare = '?page=wpedon_menu&action=delete&inline=true&order='.$item['ID'];
				$delete_url = wp_nonce_url($delete_bare, 'bulk-'.$this->_args['plural']);
				
				$actions = array(
					'edit'      => "<a href=$view_url>View</a>",
					'delete'      => "<a href=$delete_url>Delete</a>"
				);
				
				return sprintf('%1$s %2$s',
					$item['order'],
					$this->row_actions($actions)
				);
			}
			
			
			function column_cb($item) {
				return sprintf(
					'<input type="checkbox" name="%1$s[]" value="%2$s" />',
					$this->_args['singular'],
					$item['ID']
				);
			}


			function get_columns() {
				$columns = array(
					'cb'        => '<input type="checkbox" />',
					'order'     => 'Donation #',
					'amount'	=> 'Amount',
					'status'	=> 'Status / Email',
					'date'		=> 'Date (YYYY-MM-DD HH-MM-SS)'
				);
				return $columns;
			}


			function get_sortable_columns() {
				$sortable_columns = array(
					'id'     => array('id',false),
					'order' => array('order',false)
				);
				return $sortable_columns;
			}
			
						
			function no_items() {
				_e( 'No donations found.' );
			}
			
			function get_bulk_actions() {
					$actions = array(
						'delete'    => 'Delete'
					);
					return $actions;
			}
			
			public function process_bulk_action() {
				if ( isset( $_GET['_wpnonce'] ) && ! empty( $_GET['_wpnonce'] ) ) {
					$nonce  = $_GET['_wpnonce'];
					$action = 'bulk-' . $this->_args['plural'];
					
					if ( ! wp_verify_nonce( $nonce, $action ) ) {
						wp_die('Security check fail');
					}
				}
			}
			
			function prepare_items() {
				global $wpdb;
				
				$per_page = 8;
				
				$columns = $this->get_columns();
				$hidden = array();
				$sortable = $this->get_sortable_columns();
				
				$this->_column_headers = array($columns, $hidden, $sortable);
				
				$this->process_bulk_action();
				
				$data = $this->get_data();
				
				if (isset($_REQUEST['orderby'])) {
					function usort_reorder($a,$b) {
						$orderby = (!empty($_REQUEST['orderby'])) ? $_REQUEST['orderby'] : 'order';
						$order = (!empty($_REQUEST['order'])) ? $_REQUEST['order'] : 'asc';
						$result = strcmp($a[$orderby], $b[$orderby]);
						return ($order==='asc') ? $result : -$result;
					}
					usort($data, 'usort_reorder');
				}

				$current_page = $this->get_pagenum();
				
				

				$total_items = count($data);

				$data = array_slice($data,(($current_page-1)*$per_page),$per_page);




				$this->items = $data;

				$this->set_pagination_args( array(
					'total_items' => $total_items,
					'per_page'    => $per_page,
					'total_pages' => ceil($total_items/$per_page)
				) );
			}
		}
		
		
		function wpedon_tt_render_list_pagea() {
			
			$testListTable = new wpedon_button_orders_table();
			$testListTable->prepare_items();
			
			?>
			
			<style>
			.check-column {
				width: 2% !important;
			}
			.column-order {
				width: 10%;
			}
			.column-item {
				width: 10%;
			}
			.column-amount {
				width: 10%;
			}
			.column-status {
				width: 12%;
			}
			</style>			
			
			<div style="width:98%">
			
				<table width="100%"><tr><td>
				<br />
				<span style="font-size:20pt;">Donations</span>
				</td><td valign="bottom">
				</td></tr></table>
				
				<?php
				if (isset($_GET['message']) && $_GET['message'] == "deleted") {
					echo "<div class='updated'><p>Donation entry(s) deleted.</p></div>";
				}
				if (isset($_GET['message']) && $_GET['message'] == "nothing") {
					echo "<div class='updated'><p>No action selected.</p></div>";
				}
				if (isset($_GET['message']) && $_GET['message'] == "nothing_deleted") {
					echo "<div class='updated'><p>Nothing selected to delete.</p></div>";
				}
				if (isset($_GET['message']) && $_GET['message'] == "error") {
					echo "<div class='updated'><p>An error occured while processing the query. Please try again.</p></div>";
				}
				?>
				
				<form id="products-filter" method="get">
					<input type="hidden" name="page" value="<?php echo $_REQUEST['page'] ?>" />
					<?php $testListTable->display() ?>
				</form>
			
			</div>

			<?php
		}
		
		wpedon_tt_render_list_pagea();
	}
	

	// end admin orders page view orders
	
	
	
	
	// admin orders page view order
	if (isset($_GET['action']) && $_GET['action'] == "view") {
		
		?>
		
		<div style="width:98%;">
		
			<form method='post' action='<?php $_SERVER["REQUEST_URI"]; ?>'>
			
			<?php
			$post_id = intval($_GET['order']);
			
			if (!$post_id) {
				echo'<script>window.location="admin.php?page=wpedon_menu"; </script>';
				exit;
			}
			
			check_admin_referer('view_'.$post_id);
			
			$post_data = get_post($post_id);
			$title = $post_data->post_title;
			$date = $post_data->post_date;
			$txn_id = get_post_meta($post_id,'wpedon_button_txn_id',true);
			?>
				
				<table width="100%"><tr><td valign="bottom" width="85%">
				<br />
				<span style="font-size:20pt;">View Donation</span>
				</td><td valign="bottom">
				<a href="?page=wpedon_menu" class="button-secondary" style="font-size: 14px;height: 30px;float: right;">View All Donations</a>
				</td></tr></table>
				
				<?php
				// error
				if (isset($error) && isset($error) && isset($message)) {
					echo "<div class='error'><p>"; echo $message; echo"</p></div>";
				}
				// saved
				if (!isset($error)&& !isset($error) && isset($message)) {
					echo "<div class='updated'><p>"; echo $message; echo"</p></div>";
				}
				?>
				
				<br />
				
				<div style="background-color:#fff;padding:8px;border: 1px solid #CCCCCC;"><br />
				
					<span style="font-size:16pt;">Donation #<?php echo $post_id; ?> Details</span>
					<br /><br />
					
					<table width="350px"><tr><td>
						
						<b>Transaction</b></td></tr><tr><td>
						PayPal Transaction ID: </td><td><a target="_blank" href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_view-a-trans&id=<?php echo esc_attr($txn_id); ?>"><?php echo esc_attr($txn_id); ?></a></td></tr><tr><td>
						Donation Date: </td><td><?php echo esc_attr($date); ?></td></tr><tr><td>
						<br /></td><td></td></tr><tr><td>
						<b>Item</b></td></tr><tr><td>
						Purpose / Name: </td><td><?php echo esc_attr($title); ?></td></tr><tr><td>
						Amount: </td><td><?php echo esc_attr(get_post_meta($post_id,'wpedon_button_payment_amount',true)); ?></td></tr><tr><td>
						Recurring: </td><td><?php
						if (get_post_meta($post_id,'wpedon_button_payment_cycle',true) != "") {
							echo esc_attr(get_post_meta($post_id,'wpedon_button_payment_cycle',true));
						} else {
							echo "No";
						}						
						?></td></tr><tr><td>
						Donation ID: </td><td><?php echo esc_attr(get_post_meta($post_id,'wpedon_button_item_number',true)); ?></td></tr><tr><td>
						<br /></td><td></td></tr><tr><td>
						<b>Payer</b></td></tr><tr><td>
						Payer Email: </td><td><?php echo esc_attr(get_post_meta($post_id,'wpedon_button_payer_email',true)); ?></td></tr><tr><td>
						Payer Currency: </td><td><?php echo esc_attr(get_post_meta($post_id,'wpedon_button_payment_currency',true)); ?></td></tr><tr><td>
						
					</td></tr></table>
						
						<input type="hidden" name="update">
						
				</div>
				
				<div style="text-align:right">
				Note: If donation was set by donor as recurring on PayPal then <br />the Purpose / Name and Donation ID fields will be unavailable.
				</div>
			</form>
		
		</div>
		
		<?php	
		
	}
	// end admin orders page view order
	
	
	// admin orders page delete order
	if (isset($_GET['action']) && $_GET['action'] == "delete" || isset($_GET['action2']) && $_GET['action2'] == "delete") {
		
		if ($_GET['inline'] == "true") {
			$post_id = array($_GET['order']);
		} else {
			$post_id = $_GET['order'];
		}
		
		if (empty($post_id)) {
			echo'<script>window.location="?page=wpedon_menu&message=nothing_deleted"; </script>';
		}
		
		foreach ($post_id as $to_delete) {
			
			$to_delete = intval($to_delete);
			
			if (!$to_delete) {
				echo'<script>window.location="?page=wpedon_buttons&message=error"; </script>';
				exit;
			}
			
			wp_delete_post($to_delete,1);
			delete_post_meta($to_delete,'wpedon_button_item_number');
			delete_post_meta($to_delete,'wpedon_button_payment_status');
			delete_post_meta($to_delete,'wpedon_button_payment_amount');
			delete_post_meta($to_delete,'wpedon_button_payment_cycle');
			delete_post_meta($to_delete,'wpedon_button_txn_id');
			delete_post_meta($to_delete,'wpedon_button_payer_email');
			
		}
		
		echo'<script>window.location="?page=wpedon_menu&message=deleted"; </script>';
		
	}
	// end admin orders page delete order
	
	// admin orders page no action taken
	if (isset($_GET['action']) && $_GET['action'] == "-1") {
		
		echo'<script>window.location="?page=wpedon_menu&message=nothing"; </script>';
		
	}
	// end admin orders page no action taken
	
}