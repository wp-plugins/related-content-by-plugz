jQuery(document).ready(function() {

    // dropdown in leftmenu
    jQuery('.leftmenu .dropdown > a').click(function() {
        if (!jQuery(this).next().is(':visible'))
            jQuery(this).next().slideDown('fast');
        else
            jQuery(this).next().slideUp('fast');
        return false;
    });


    if (jQuery.uniform) {
        jQuery('input:checkbox, input:radio, .uniform-file').uniform();
    }

    if (jQuery('.widgettitle .close').length > 0) {
        jQuery('.widgettitle .close').click(function() {
            jQuery(this).parents('.widgetbox').fadeOut(function() {
                jQuery(this).remove();
            });
        });
    }


    // add menu bar for phones and tablet
    jQuery('<div class="topbar"><a class="barmenu">' +
            '</a><div class="chatmenu"></a></div>').insertBefore('.mainwrapper');

    jQuery('.topbar .barmenu').click(function() {

        var lwidth = '260px';
        if (jQuery(window).width() < 340) {
            lwidth = '240px';
        }

        if (!jQuery(this).hasClass('open')) {
            jQuery('.rightpanel, .headerinner, .topbar').css({marginLeft: lwidth}, 'fast');
            jQuery('.logo, .leftpanel').css({marginLeft: 0}, 'fast');
            jQuery(this).addClass('open');
            jQuery('body').addClass('showLeftMenu');
        } else {
            jQuery('.rightpanel, .headerinner, .topbar').css({marginLeft: 0}, 'fast');
            jQuery('.logo, .leftpanel').css({marginLeft: '-' + lwidth}, 'fast');
            jQuery(this).removeClass('open');
            jQuery('body').removeClass('showLeftMenu');
        }
    });

    jQuery('.topbar .chatmenu').click(function() {
        if (!jQuery('.onlineuserpanel').is(':visible')) {
            jQuery('.onlineuserpanel,#chatwindows').show();
            jQuery('.topbar .chatmenu').css({right: '210px'});
        } else {
            jQuery('.onlineuserpanel, #chatwindows').hide();
            jQuery('.topbar .chatmenu').css({right: '10px'});
        }
    });

    // show/hide left menu
    jQuery(window).resize(function() {
        if (!jQuery('.topbar').is(':visible')) {
            jQuery('.rightpanel, .headerinner').css({marginLeft: '260px'});
            jQuery('.logo, .leftpanel').css({marginLeft: 0});
        } else {
            jQuery('.rightpanel, .headerinner').css({marginLeft: 0});
            jQuery('.logo, .leftpanel').css({marginLeft: '-260px'});
        }
        
        var winSize = jQuery(window).height();
        jQuery('.mainwrapper').css("min-height", winSize);
        
        if ($(window).width() < 1000) {
            $(".showLeftMenu").removeClass('showLeftMenu');
            $(".topbar").css('margin-left', '0px');
        }
    });

    // dropdown menu for profile image
    jQuery('.userloggedinfo img').click(function() {
        if (jQuery(window).width() < 480) {
            var dm = jQuery('.userloggedinfo .userinfo');
            if (dm.is(':visible')) {
                dm.hide();
            } else {
                dm.show();
            }
        }
    });

    // expand/collapse boxes
    if (jQuery('.minimize').length > 0) {

        jQuery('.minimize').click(function() {
            if (!jQuery(this).hasClass('collapsed')) {
                jQuery(this).addClass('collapsed');
                jQuery(this).html("&#43;");
                jQuery(this).parents('.widgetbox:first')
                        .css({marginBottom: '20px'})
                        .find('.widgetcontent:first')
                        .hide();
            } else {
                jQuery(this).removeClass('collapsed');
                jQuery(this).html("&#8211;");
                jQuery(this).parents('.widgetbox:first')
                        .css({marginBottom: '0'})
                        .find('.widgetcontent:first')
                        .show();
            }
            return false;
        });
    }

    // if facebook like chat is enabled
    if (jQuery.cookie('enable-chat')) {
        jQuery('body').addClass('chatenabled');
        jQuery.get('ajax/chat.html', function(data) {
            jQuery('body').append(data);
        });
    } else {
        if (jQuery('.chatmenu').length > 0) {
            jQuery('.chatmenu').remove();
        }
    }
    
    $(window).trigger('resize');
});