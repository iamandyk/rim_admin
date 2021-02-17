$(document).ready(function () {
    $(".college-select").on("change", function () {
        this.form.submit();
    });

    $(".year-select").on("change", function () {
        this.form.submit();
    });
});
