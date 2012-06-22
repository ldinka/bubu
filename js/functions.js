jQuery(document).ready(function() {
    $("#add_article").validate({
        rules: {
            article_author:  "required",
            article_name:    "required",
            article_content: "required"
        },
        messages: {
            article_author:  "Пожалуйста, введите автора статьи",
            article_name:    "Пожалуйста, введите название статьи",
            article_content: "Пожалуйста, введите текст статьи"
        }
    });

    $("#login_form").validate({
        rules: {
            login:    "required",
            password: "required"
        },
        messages: {
            login:    "Пожалуйста, введите логин",
            password: "Пожалуйста, введите пароль"
        }
    });

    jQuery(".delete").click(function(){
        return confirm("Вы действительно хотите удалить этот объект?");
    });
});