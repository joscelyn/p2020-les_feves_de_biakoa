<?php /*
Template Name: Association
*/
?>

<?php get_header(); ?>

    <main>
        <div class="headTitles">
            <h2 class="headTitles__sub"><?php echo the_field('header_titre');?></h2>
            <h1 class="headTitles__main"><?php echo the_field('header_sous_titre');?>TEST</h1>
        </div>

        <div class="mainContent">
            <div class="container">

                <div class="aboutUs">
                    <h2 class="fatTitle"><?php echo the_field('section_1_description_titre');?></h2>

                    <div class="box flexRow flexRow--middle">
                        <div class="box__text">
                            <p><?php echo the_field('section_2_descr');?></p>
                        </div>
                        <div class="box__img">
                            <img style="height: 240px;" src="<?php  the_field('section_1_description_image'); ?>">
                        </div>
                    </div>
                </div>

                <div class="keyPoints">
                    <h2 class="fatTitle">Éléments clés</h2>
                    <div class="flexRow flexRow--middle">

                        <div class="col-small">
                            <figure class="portrait box">
                                <img src="images/sylvie.jpg" alt="Image"/>
                                <figcaption class="portrait__caption">
                                    <h5>Sylvie Paven</h5>
                                    <p>55 ans, fondatrice de l’association</p>
                                    <p>Sylvie Paven est la fondatrice de l’association Les fèves de Biakoa et également
                                        statisticienne à l’INSEE. C’est dans le cadre d’une formation aux techniques
                                        d'analyse pour l’APEDS qu’elle se rend pour la première fois au Cameroun, à
                                        Yaoundé.</p>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="col-2">
                            <div class="box timeline">
                                <ul class="timeline__list">
                                    <li>
                                        <div class="circle">
                                            <span class="month">Mars</span>
                                            <span class="year">2016</span>
                                        </div>
                                        <p>Les membres de l'APEDS, formés aux techniques d'analyse mênent une enquête
                                            sur les populations vulnérables, à Yaoundé</p>
                                    </li>
                                    <li>
                                        <div class="circle">
                                            <span class="month">Juillet</span>
                                            <span class="year">2016</span>
                                        </div>
                                        <p>De retour de son premier voyage au Cameroun, avec l’APEDS, Sylvie Paven
                                            décide de fonder l’association Les fèves de Biakoa</p>
                                    </li>
                                    <li>
                                        <div class="circle">
                                            <span class="month">Mars</span>
                                            <span class="year">2017</span>
                                        </div>
                                        <p>Sylvie Paven retourne au Cameroun et plus précisément à Bioka pour établir
                                            leurs besoins</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="container">
                <div class="story">

                    <h3 class="fatTitle underlineTitle">Notre histoire</h3>

                    <div class="flexRow flexRow--middle">

                        <div class="col-2">
                            <div class="box">
                                <div class="box__text">
                                    <h4>La création de l'association</h4>
                                    <p>En mars 2016, Sylvie Paven se rend au Cameroun dans le cadre d'une mission
                                        d'entraide. Pendant 15 jours, a Yaoundé elle enseigne les techniques d'analyse
                                        d'enquête aux membres de l’Association pour la Promotion de l’Education et du
                                        Développement Social. </p>
                                    <p>Sylvie a donc été sollicitée pour les aider à exploiter les résultats de leur
                                        enquête sur la situation des femmes veuves au Cameroun afin qu'ils puissent les
                                        analyser et restituer des résultats. Dans ce type de missions, les week-ends
                                        sont libres et permettent de découvrir le pays. Sylvie eu la chance de se voir
                                        proposer par Guy Marcel, un des membres de l'APEDS, la visite de son village
                                        natal : Biakoa, un village de brousse au nord de Yaoundé.</p>
                                </div>
                            </div>

                        </div>

                        <div class="col-3">
                            <figure class="image">
                                <div class="image__img box">
                                    <img src="images/association1.jpg" alt="Image"/>
                                </div>
                                <figcaption class="box image__caption">
                                    Biakoa, un village de brousse au nord de Yaoundé.
                                </figcaption>
                            </figure>
                        </div>

                    </div>

                    <div class="flexRow flexRow--middle">

                        <div class="col-small">
                            <div class="box green">
                                <div class="box__text">
                                    <h4>APEDS : ses actions</h4>
                                    <p>APEDS est une association camerounaise qui contribue à la promotion des droits de
                                        la femme et de l'enfant et réalise notamment des enquêtes auprès de populations
                                        vulnérables, comme les femmes veuves, afin de déterminer les actions à mettre en
                                        place. </p>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box__text">
                                    <blockquote>
                                        <p>J’ai décidé de monter des projets avec les habitants du villages et de les
                                            prioriser avec leur accord. </p>
                                        <p class="author">- Sylvie Paven </p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>

                        <div class="col-2">
                            <figure class="image">
                                <div class="image__img box">
                                    <img src="images/association1.jpg" alt="Image"/>
                                </div>
                                <figcaption class="box image__caption">
                                    Biakoa, un village de brousse au nord de Yaoundé.
                                </figcaption>
                            </figure>
                        </div>

                    </div>

                    <div class="flexRow flexRow--middle">

                        <div class="col-small">
                            <figure class="portrait box">
                                <img src="images/guy.jpg" alt="Image"/>
                                <figcaption class="portrait__caption">
                                    <h5>Guy-Marcel NGAYA </h5>
                                    <p>45 ans, correspondant à Biakoa</p>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="col-1">
                            <div class="box">
                                <div class="box__text">
                                    <h4>La découvertes d’un mode de vie précaire</h4>
                                    <p>Sylvie est accueillie chaleureusement dans le village de Biakoa cependant elle
                                        constate des conditions de vie déplorables : absence d'eau potable dans le
                                        village, coupures intempestives de l'électricité, état déplorables des routes, 6
                                        heures de routes cabossées pour rejoindre Biakoa de Yaoundé. Les enfants sont
                                        nombreux mais beaucoup d’entre eux ne vont pas à l’école car souvent par leur
                                        travail, ils apportent une mince contribution financière à leur famille. </p>
                                    <p>A son retour en France, beaucoup de questions font surface : Pourquoi tout Homme
                                        n'a pas le droit de vivre dignement et dans des conditions décentes ?</p>
                                    <p>C’est alors que l’idée d'apporter son soutien à ce petit village de brousse lui
                                        est venue. L'association « Les Fèves de Biakoa » est née de cet enthousiasme
                                        personnel et des compétences d'Etienne, son fils, en juillet 2016.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="flexRow flexRow--middle">

                        <div class="col-1">
                            <figure class="image image--captionSide">
                                <div class="image__img box">
                                    <img src="images/association1.jpg" alt="Image"/>
                                </div>
                                <figcaption class="box image__caption image__caption--big">
                                    Légende : Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                    veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                    voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                                </figcaption>
                            </figure>
                        </div>

                    </div>

                    <div class="flexRow flexRow--middle">

                        <div class="col-3">
                            <div class="box">
                                <div class="box__text">
                                    <h4>Nos objectifs aujourd’hui, en 2017 </h4>
                                    <p>En mars 2017, Sylvie retourne à Biakoa afin de déterminer les besoins des
                                        habitants du village. Elle y rencotre le Chef du village, les directeurs des
                                        écoles maternelles, primaires et collège, du centre de soins, les membres de
                                        l'Association des femmes veuves. </p>
                                    <p>L'eau est rapidement devenu le problème crucial et récurrent pour les
                                        responsables du village, impactant les besoins de soins de santé. Les
                                        populations sont souvent malades, surtout les enfants. Un accès à l’eau potable
                                        est un projet ambitieux pour une petite association comme la nôtre mais reste
                                        l’un des objectifs a atteindre à long terme. </p>
                                    <p>Notre 2e préocupation est un meilleur accès à l'éducation. A Biakoa, comme dans
                                        toutes les écoles camerounaises, les droits de scolarité sont gratuits mais tout
                                        le reste est payant ! Ce sont les parents qui sont mis à contribution. Le poids
                                        des dépenses d'éducation est énorme et freine l'accès à l'éducation, surtout
                                        pour les familles les plus démunies, nombreuses en brousse.</p>
                                    <p>Notre action aujourd’hui est d’acheter les manuels scolaires préconisés par le
                                        programme officiel d'enseignement du Ministère de l'éducation au Cameroun et de
                                        les mettre à la disposition de l'école .</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-small">
                            <div class="box">
                                <div class="box__text">
                                    <h4 class="box__text__title">Nos priorités</h4>
                                    <ul class="iconList">
                                        <li>
                                            <img src="img/book.svg" alt="📕">
                                            <p>Meilleure éducation</p>
                                        </li>
                                        <li>
                                            <img src="img/water.svg" alt="💦">
                                            <p>Accès à l'eau potable</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>