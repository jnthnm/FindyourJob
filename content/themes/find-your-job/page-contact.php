
<?php
/*
Template Name: Contact
*/
?>
<?php get_header();?>
<!--==========main==========-->
<main class="main_contact">

    <h1 class="title_contact">contactez-nous</h1>

    <div class="content_envol">

    <i class="fa fa-paper-plane-o ml-2 envol" ></i>
</div>

<?php
while(have_posts()): the_post();
echo the_content();
endwhile;
?>

    <!-- <form class="form_contact" method="post">
        <div class="wrap_contact">
            <label class="label_contact" for="name">
                <input id="name" class="input input_contact" type="text" name="name" placeholder="Nom" required="required" />
                <i class="fa fa-user prefix i_contact"></i>
            </label>
        </div>

        <div class="wrap_contact">
            <label class="label_contact" for="firstname">
                <input id="firstname" class="input input_contact" type="text" name="firstname" placeholder="Prénom" required="required" />
                <i class="fa fa-user prefix i_contact"></i>
            </label>
        </div>

        <div class="wrap_contact">
            <label class="label_contact" for="email">
                <input id="email" class="input input_contact" type="email" name="email" placeholder="email" required="required" />
                <i class="fa fa-envelope prefix i_contact"></i>
            </label>
        </div>
        <div class="wrap_contact">
            <label for="inputoption">
            <select id="inputoption" class="input" name="list_contact" size="1">
                <option>Particulier</option>
                <option>Professionnel</option>
                <option>Centre de formation</option>
                <option>Membre</option>
            </select>
            </label>
        </div>

        <div class="wrap_contact">
            <label class="size_textarea" for="text_area">
            <textarea id="text_area" class="textarea_contact input_contact" name="text_area"></textarea>
            <i class="fa fa-commenting prefix i_contact"></i>
            </label>
        </div>

        <div class="wrap_contact">
            <label for="butt_submit"></label>
            <input class="submit_contact" type="submit" name="submitButton" value="envoyer">

        </div>
    </form> -->







</main>

<?php get_footer();?>
