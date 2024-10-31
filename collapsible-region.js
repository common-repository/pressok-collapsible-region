jQuery(document).ready(function($) {
    $('div.pressOK-collapsible').each(function(i, el) {
        // collect children to wrap 
        var children = $(el).children();
        // use first child of collection for title (toggle) element
        var firstChild = children[0];
        // wrap all the children in a collapsible container but first check if the option is open
        // if closed, hide the container.
        if($(el).hasClass('open')) {
            var container = $(children).wrapAll('<div class="pressOK-collapsibleContainer" />');
        } else {
            var container = $(children).wrapAll('<div class="pressOK-collapsibleContainer" style="display:none" />');
        }
        // clone the first element of the children outside the collapsible container,
        // this now becomes the title element that is used to toggle the container          
        var title = $(firstChild).clone().prependTo(el);
        // add title class to first element to use for fancy styling
        $(title).addClass('title');
        // remove the first element (since it is cloned it is no longer usefull within the container)
        $(firstChild).remove();
        // add click event to the title element, for styling purposes we toggle the open and closed classes
        $(title).bind('click', function(evt) {
            $(title).next().slideToggle('slow', function() {
                $(el).toggleClass('open');
                $(el).toggleClass('closed');
            });
        });
        
    });
});