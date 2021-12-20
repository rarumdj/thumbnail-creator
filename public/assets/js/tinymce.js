tinymce.init({
    selector: "#mytextarea",
    element_format: "html",
    entity_encoding: "raw",
    autosave_ask_before_unload: false,

    plugins:
        "legacyoutput autolink advlist anchor autoresize autosave charmap code colorpicker contextmenu directionality emoticons hr image imagetools insertdatetime layer link lists media nonbreaking pagebreak paste preview print save searchreplace spellchecker tabfocus table template textcolor textpattern visualblocks visualchars wordcount",
    //   toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
    // convert_newlines_to_brs : true,
    // force_br_newlines : true,
    // forced_root_block: false ,

    setup: function (ed) {
        ed.on("mouseover", function (e) {
            var temp = tinyMCE.activeEditor.getContent();
            var res = replaceAll(temp, "\n", "<br>");
            $("#content").text(temp);
        });

        ed.on("click", function (e) {
            var temp = tinyMCE.activeEditor.getContent();
            var res = replaceAll(temp, "\n", "<br>");

            $("#content").text(temp);
        });

        ed.on("change", function (e) {
            var temp = tinyMCE.activeEditor.getContent();
            var res = replaceAll(temp, "\n", "<br>");

            $("#content").text(temp);
        });

        ed.on("keyup", function () {
            var temp = tinyMCE.activeEditor.getContent();
            var res = replaceAll(temp, "\n", "<br>");

            $("#content").text(temp);
        });
    },
});
