$(document).ready(function() {
    $("input:checkbox").click(function() {
        $("[name=" + $(this).prop('name') + "]").prop("checked", false);
        $(this).prop("checked", true);
    });
});