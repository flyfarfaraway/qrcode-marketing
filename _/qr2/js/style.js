$(document).ready(function () {
        // load index page when the page loads
        $( "#display-form" ).load( "form/web-link.html" );
        $("#web-link").click(function(){
        $( "#display-form" ).load( "form/web-link.html" );
});
        $("#text").click(function(){
        $( "#display-form" ).load( "form/text.html" );
});
        $("#name-card").click(function(){
        $( "#display-form" ).load( "form/name-card.html" );
});
        $("#social").click(function(){
        $( "#display-form" ).load( "form/social.html" );
});

})

