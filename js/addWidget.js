var $ = jQuery;

function detectab()
{
    //create a iframe. Append the iframe to the body. And then after 100ms check if their offsetHeight, display or visibility is set such a way that user cannot see them.
    //In the URL use the words specific to advertising so that Adblock can do string matching.
    var iframe = document.createElement("iframe");
    iframe.height = "1px";
    iframe.width = "1px";
    iframe.id = "ads-text-iframe";
    iframe.src = "http://domain.com/ads.html";

    document.body.appendChild(iframe);

    setTimeout(function()
    {
        var iframe = document.getElementById("ads-text-iframe");
        if (iframe.style.display == "none" || iframe.style.display == "hidden" || iframe.style.visibility == "hidden" || iframe.offsetHeight == 0)
        {
            jAlert("Adblock is blocking widget preview on this page. Whitelist this URL or disable Adblock on this site in your browser!", "Adblock alert");
            iframe.outerHTML = '';
            delete iframe;
        }
        else
        {
            iframe.outerHTML = '';
            delete iframe;
        }
    }, 100);
}

function showPreview(wid) {
    if (typeof wid == 'undefined' || wid == '') {
        $('#preview').hide();
        $(".widgetbox").hide();
        $(".span4").hide();
        $(".span8").removeClass('span8').addClass('span12');
        $("#name_fieldset").hide();
        $("#submit_fieldset").hide();
        $(window).trigger("resize");
        return false;
    }

    $('iframe').iframeAutoHeight({resetToMinHeight: true});

    $.ajax({
        type: "POST",
        url: widgetUrl,
        dataType: 'html',
        data: {
            action: 'get_preview',
            wid: wid
        }
    }).done(function(result) {
        createEmbedCode(wid);
        $(".span12").removeClass('span12').addClass('span8');
        $(".span4").show();
        $('#preview').show();
        $("#name_fieldset").show();
        $("#submit_fieldset").show();
        $(window).trigger("resize");
        first_run = false;
    });
}

function createEmbedCode(wid) {
    if ($(".colorpicker:visible").length > 0) {
        return false;
    }

    var posttype = "post";
    var wtype = 'G';
    if (wtype == "" || posttype == "") {
        return;
    }

    var whereInstance = $("#widget_code");
    if (typeof whereInstance == 'undefined') {
        return;
    }

    var it = 'sqau';
    var wt = 'G';

    var str = document.getElementById("show_only_my_articles").value;
    var sntw = document.getElementById("show_only_my_trades").value;
    var it = document.getElementById("imagetype").value;
    var wt = document.getElementById("widgettype").value;
    var iw = document.getElementById("imgwidth").value;
    var pd = document.getElementById("padding").value;
    var br = document.getElementById("border").value;
    var bty = document.getElementById("bordertype").value;
    var brc = document.getElementById("imgbdcolor").value;
    var db = document.getElementById("imagenumber").value;
    var st = document.getElementById("titleyn").value;
    var c = document.getElementById("widget_width").value;
    var sru = document.getElementById("show_referer_url").value;
    var sete = document.getElementById("search_engine_traffic_enable").value;

    var tp = document.getElementById("textpos").value;
    var ta = document.getElementById("textalign").value;
    var dec = document.getElementById("hover").value;
    var ff = document.getElementById("fontfamily").value;
    var fsz = document.getElementById("fontsize").value;
    var fs = document.getElementById("fontstyle").value;
    var fw = document.getElementById("fontweight").value;
    var fc = document.getElementById("fontcolor").value;
    var ch = document.getElementById("letternum").value;
    var tl = document.getElementById("titlelength").value;
    var ca = 'soft';

    var ibch = document.getElementById("imgbdcolorhover").value;
    var htc = document.getElementById("hovertextcolor").value;
    var iyn = document.getElementById("imageyn").value;
    var id = document.getElementById("affid").value;

    var opc = document.getElementById("opacolor").value;
    var opa = document.getElementById("opacity").value;
    var sitelink = document.getElementById("sitelink").value;
    var customcss = $("#customcss").val();
    customcss = customcss.replace(/#/g, "|hash|");
    customcss = customcss.replace(/%/g, "|percent|");
    customcss = customcss.replace(/\n/g, "");
    var nh = '0';
    var fid = wid;

    var params = "customcss=" + encodeURIComponent($.trim(customcss)) + ",opacolor_r=" + $("#opacolor_r").val() + ",cff=" + $("#cff").val() + ",sitelink=" + $("#sitelink").val() + ",opacolor_g=" + $("#opacolor_g").val() + ",opacolor_b=" + $("#opacolor_b").val() + ",opacolor_a=" + $("#opacolor_a").val() + ",opacolor=" + opc + ",opacity=" + opa + ",titlelength=" + tl + ",ca=" + ca + ",c=" + c + ",nh=" + nh + ",ai=0" + ",id=" + id + ",iyn=" + iyn + ",db=" + db
            + ",htc=" + htc + ",ibch=" + ibch + ",it=" + it + ",wt=" + wt + ",iw=" + iw + ",pd=" + pd
            + ",br=" + br + ",bty=" + bty + ",brc=" + brc + ",st=" + st + ",tp=" + tp + ",ta=" + ta + ",dec=" + dec
            + ",ff=" + ff + ",fsz=" + fsz + ",fs=" + fs + ",fw=" + fw + ",fc=" + fc + ",ch=" + ch + ",adv=" + sru + ",lp=" + sete + ",str=" + str + ",show_only_my_trades=" + sntw;
    try {

        var tags0 = [document.getElementById("straight").value, document.getElementById("gay").value, document.getElementById("nonadult_parent").value];
        var tags1 = [document.getElementById("adult_tags").value, document.getElementById("nonadult").value];

        var arr0 = '';
        var arr1 = '';
        for (var i = 0; i < tags0.length; i++) {
            if (tags0[i] && tags0[i] !== '') {
                arr0 += (arr0 !== '' ? ';' : '') + (tags0[i].replace(/,/g, ";"));
            }
        }
        for (var i = 0; i < tags1.length; i++) {
            if (tags1[i] && tags1[i] !== '') {
                arr1 += (arr1 !== '' ? ';' : '') + (tags1[i].replace(/,/g, ";"));
            }
        }
        var tags = ',tags0=' + arr0 + ',tags1=' + arr1;
        params += tags;
    } catch (e) {
        console.log(e);
    }

    var frame = document.getElementById("iframe");
    frame.src = pluginPath + "/preview.php?fid=" + fid + "&p=" + params + "&a=" + engineDomain;
}
