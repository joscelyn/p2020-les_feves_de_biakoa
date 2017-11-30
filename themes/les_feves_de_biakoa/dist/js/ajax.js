jQuery(document).ready(function($){

    $(".button_more .button").on("click", function(e){
        e.preventDefault();
        current_page = 1;
        current_page++;
        var ajax_section =$(".posts__cards"); // zone ou renvoyer le contenu de l'AJAX
        jQuery.post(
            ajaxurl, // url du fichier admin-ajax.php,
            {
                'action': 'ajax_lirelasuite', // nom de l'action à créer
                'paged': current_page // exemple de variable à envoyer.
            },
            function(response){

                ajax_section.append(response);
                if(current_page >= max_paged)
                {
                    $(".button_more .button").hide();
                }
            }
        );
    });

});