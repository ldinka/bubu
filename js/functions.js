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
});