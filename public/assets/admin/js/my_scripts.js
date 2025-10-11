function slugify(string) {
    return string.toString().toLowerCase().replace(/\s+/g, '-').replace(/\-\-+/g, '-').replace(/^-+/, '').replace(/-+$/, '');
}

function slug(one, two) {
    $(one).change(function () {
        var slug = slugify($(one).val());
        $(two).val(slug);
    });
}

slug("#title","#slug");
slug("#name","#slug");


$('.numberPrice').text(function(index,value){
    return (value.replace(/\D/g,"").replace(/\B(?=(\d{3})+(?!\d))/g,","));
});