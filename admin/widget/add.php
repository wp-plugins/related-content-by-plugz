<?php
/**
 * plugz Admin Settings
 *
 * Admin settings for all plugz plugins
 *
 * @package plugz
 * @subpackage Functions
 */

include_once(dirname(__FILE__).'/header.php');

?>

<div class="wrap">
<h2 class="plugz-title">Create Widget</h2>

<?php if ($plugzConnected) : ?>
<div class="maincontent">
    <div class="maincontentinner">
        <div class="messagepanel">
            <form action="" class="stdform" id="widget_form"
                  method="post">
                <div class="row-fluid">
                    <div class="span8" id="slidingContainer" style=
                         "position: relative;">
                        <div id="slidingContent" style=
                             "position: relative; top: 0px; bottom: auto; width: auto;">
                            <h4 class="widgettitle" style=
                                "cursor: pointer;">Widget Preview</h4>

                            <div class="widgetcontent">
                                <input name="action" type="hidden"
                                       value="save">

                                <fieldset>
                                    <input type="hidden" id="website" name="wid" value="1152">
                                    <input id="widget_id"
                                           name="widget_id" type="hidden"
                                           value=""> <input id="affid"
                                           name="affid" type="hidden"
                                           value="640">

                                    <div id="preview" style=
                                         "display: block;">
                                        <p style=
                                           "font-weight: bold">
                                            Preview:</p><iframe align=
                                                            "middle" height="300" id=
                                                            "iframe" name="iframe"
                                                            scrolling="yes" src=
                                                            ""
                                                            style="height: 593px;"
                                                            width="100%"></iframe>
                                    </div>

                                    <p id="name_fieldset" style=
                                       "display: block;"><label class=
                                                             "control-label" for=
                                                             "name">Widget Name</label>
                                        <span><input autocomplete="off"
                                                     class="input-xlarge" id="name"
                                                     name="name" placeholder=
                                                     "Widget Name" required="" type=
                                                     "text" value=
                                                     "Template 1"></span></p><!-- Button (Double) -->

                                    <p class="stdformbutton" id=
                                       "submit_fieldset" style=
                                       "display: block;">
                                        <button class="button-primary"
                                                id="save" name="save">Save and
                                            Get Code</button></p>

                                    <div>
                                        <input id="widget_code"
                                               readonly="yes" style=
                                               "width: 600px; display: none;"
                                               type="text">
                                    </div>
                                </fieldset>
                            </div><!--widgetcontent-->
                        </div>
                    </div>

                    <div class="span4" style="display: block;">
                        <div class="widgetbox" style=
                             "margin-bottom: 0px; display: block;">
                            <h4 class="widgettitle" style=
                                "cursor: pointer;">Widget Templates
                                <a class=
                                   "minimize keep-maximized">–</a></h4>

                            <div class="widgetcontent" style=
                                 "display: block;">
                                <div class="slimScrollDiv" style=
                                     "position: relative; overflow: hidden; width: auto; height: 325px;">
                                    <div class="mousescroll" id=
                                         "widgetTemplates" style=
                                         "overflow: hidden; width: auto; height: 325px;">
                                        <ul class="entrylist">
                                            <li data-border="1"
                                                data-imagenumber="6"
                                                data-imagetype="sqau"
                                                data-imageyn="1"
                                                data-imgwidth="140"
                                                data-letternum="60"
                                                data-padding="5"
                                                data-textalign="center"
                                                data-widget_width="300"
                                                style=
                                                "cursor: pointer;">
                                                <div class=
                                                     "entry_wrap clearfix">
                                                    <div class=
                                                         "entry_img">
                                                        <img alt=""
                                                             src="<?php echo PLUGZ_IMAGE_DIR ?>/template1.png"></div>

                                                    <div class=
                                                         "entry_content">
                                                        <h4>Template 1</h4>

                                                        <div>
                                                            <small><strong>
                                                                    Image:</strong>
                                                                6</small>
                                                        </div>

                                                        <div>
                                                            <small><strong>
                                                                    Text:</strong>
                                                                under
                                                                the
                                                                image</small>
                                                        </div>

                                                        <div>
                                                            <small><strong>
                                                                    Widget
                                                                    Width:</strong>
                                                                300px</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="even"
                                                data-border="1"
                                                data-imagenumber="4"
                                                data-imagetype="sqau"
                                                data-imageyn="0"
                                                data-imgwidth="140"
                                                data-letternum="60"
                                                data-padding="5"
                                                data-textalign="left"
                                                data-widget_width="320"
                                                style=
                                                "cursor: pointer;">
                                                <div class=
                                                     "entry_wrap clearfix">
                                                    <div class=
                                                         "entry_img">
                                                        <img alt=""
                                                             src="<?php echo PLUGZ_IMAGE_DIR ?>/template2.png"></div>

                                                    <div class=
                                                         "entry_content">
                                                        <h4>Template 2</h4>

                                                        <div>
                                                            <small><strong>
                                                                    Image:</strong>
                                                                no</small>
                                                        </div>

                                                        <div>
                                                            <small><strong>
                                                                    Text:</strong>
                                                                left</small>
                                                        </div>

                                                        <div>
                                                            <small><strong>
                                                                    Widget
                                                                    Width:</strong>
                                                                320px</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li data-border="0"
                                                data-fontcolor="ffffff"
                                                data-hovertextcolor=
                                                "ffffff"
                                                data-imagenumber="3"
                                                data-imagetype="port"
                                                data-imageyn="1"
                                                data-imgwidth="250"
                                                data-letternum="60"
                                                data-padding="7"
                                                data-textalign="left"
                                                data-textpos="1"
                                                data-widget_width="250"
                                                style=
                                                "cursor: pointer;">
                                                <div class=
                                                     "entry_wrap clearfix">
                                                    <div class=
                                                         "entry_img">
                                                        <img alt=""
                                                             src="<?php echo PLUGZ_IMAGE_DIR ?>/template3.png"></div>

                                                    <div class=
                                                         "entry_content">
                                                        <h4>Template 3</h4>

                                                        <div>
                                                            <small><strong>
                                                                    Image:</strong>
                                                                3</small>
                                                        </div>

                                                        <div>
                                                            <small><strong>
                                                                    Text:</strong>
                                                                on the
                                                                image</small>
                                                        </div>

                                                        <div>
                                                            <small><strong>
                                                                    Widget
                                                                    Width:</strong>
                                                                250px</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="even"
                                                data-border="0"
                                                data-fontfamily=
                                                "Georgia"
                                                data-fontsize="16"
                                                data-imagenumber="10"
                                                data-imageyn="0"
                                                data-letternum="100"
                                                data-sitelink="1"
                                                data-textalign="center"
                                                data-titlelength=
                                                "trimmed"
                                                data-widget_width="570"
                                                style=
                                                "cursor: pointer;">
                                                <div class=
                                                     "entry_wrap clearfix">
                                                    <div class=
                                                         "entry_img">
                                                        <img alt=""
                                                             src="<?php echo PLUGZ_IMAGE_DIR ?>/template4.png"></div>

                                                    <div class=
                                                         "entry_content">
                                                        <h4>Template 4</h4>

                                                        <div>
                                                            <small><strong>
                                                                    Image:</strong>
                                                                0</small>
                                                        </div>

                                                        <div>
                                                            <small><strong>
                                                                    Text:</strong>
                                                                center</small>
                                                        </div>

                                                        <div>
                                                            <small><strong>
                                                                    Widget
                                                                    Width:</strong>
                                                                320px</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li data-border="1"
                                                data-imagenumber="5"
                                                data-imagetype="wide"
                                                data-imageyn="1"
                                                data-imgwidth="140"
                                                data-letternum="60"
                                                data-padding="5"
                                                data-textalign="left"
                                                data-textpos="4"
                                                data-widget_width="300"
                                                style=
                                                "cursor: pointer;">
                                                <div class=
                                                     "entry_wrap clearfix">
                                                    <div class=
                                                         "entry_img">
                                                        <img alt=""
                                                             src="<?php echo PLUGZ_IMAGE_DIR ?>/template5.png"></div>

                                                    <div class=
                                                         "entry_content">
                                                        <h4>Template 5</h4>

                                                        <div>
                                                            <small><strong>
                                                                    Image:</strong>
                                                                5</small>
                                                        </div>

                                                        <div>
                                                            <small><strong>
                                                                    Text:</strong>
                                                                right
                                                                side</small>
                                                        </div>

                                                        <div>
                                                            <small><strong>
                                                                    Image
                                                                    Type:</strong>
                                                                widescreen</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="even"
                                                data-border="1"
                                                data-fontweight="bold"
                                                data-imagenumber="8"
                                                data-imagetype="sqau"
                                                data-imageyn="1"
                                                data-imgwidth="110"
                                                data-letternum="60"
                                                data-padding="3"
                                                data-textalign="center"
                                                data-widget_width="470"
                                                style=
                                                "cursor: pointer;">
                                                <div class=
                                                     "entry_wrap clearfix">
                                                    <div class=
                                                         "entry_img">
                                                        <img alt=""
                                                             src="<?php echo PLUGZ_IMAGE_DIR ?>/template6.png"></div>

                                                    <div class=
                                                         "entry_content">
                                                        <h4>Template 6</h4>

                                                        <div>
                                                            <small><strong>
                                                                    Image:</strong>
                                                                8</small>
                                                        </div>

                                                        <div>
                                                            <small><strong>
                                                                    Text:</strong>
                                                                under
                                                                the
                                                                image</small>
                                                        </div>

                                                        <div>
                                                            <small><strong>
                                                                    Widget
                                                                    Width:</strong>
                                                                470px</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class=
                                         "slimScrollBar ui-draggable"
                                         style=
                                         "border-radius: 0px; background: none repeat scroll 0% 0% rgb(102, 102, 102); width: 10px; position: absolute; top: 1px; opacity: 0.4; display: none; z-index: 99; right: 1px; height: 103.554px;">
                                    </div>

                                    <div style=
                                         "width: 15px; height: 100%; position: absolute; top: 0px; right: 1px;">
                                    </div>
                                </div><!--#widgetTemplates-->
                            </div>
                        </div>

                        <div class="widgetbox" style="margin-bottom: 0px;">
                            <h4 class="widgettitle">Customize Widget <a class="minimize">–</a></h4>

                            <div class="widgetcontent" style="display: block;">
                                <div class="widgetbox box-inverse">
                                    <h4 class="widgettitle">Widget Settings <a class=
                                                                               "minimize">–</a></h4>

                                    <div class="clearfix widgetcontent">
                                        <p class="row"><label class="span7">Widget Type</label>
                                            <span class="span7 field"><select class="input-small" id=
                                                                              "widgettype" name="widgettype" required="">
                                                    <option class="input-small option" id="widgettype-0" value=
                                                            "A">
                                                        Mixed
                                                    </option>

                                                    <option class="input-small option" id="widgettype-1" value=
                                                            "G">
                                                        Gallery only
                                                    </option>

                                                    <option class="input-small option" id="widgettype-2" value=
                                                            "M">
                                                        Movie only
                                                    </option>
                                                </select></span></p>

                                        <p class="row"><label class="span7">Widget Width</label>
                                            <span class="span7 field"><input class="input-small" id=
                                                                             "widget_width" name="widget_width" type="text" value=
                                                                             "800"></span></p>

                                        <p class="row"><label class="span7">Monetize traffic</label>
                                            <span class="span7 field"><select class="input-small" id=
                                                                              "monetize_traffic" name="monetize_traffic" required="">
                                                    <option class="input-small option" id="monetize_traffic-0"
                                                            value="1">
                                                        yes
                                                    </option>

                                                    <option class="input-small option" id="monetize_traffic-1"
                                                            value="0">
                                                        no
                                                    </option>
                                                </select> <a data-content=
                                                             "Yes: Enable sponsored posts on the widget. No: Disable sponsored posts on the widget. You get income after sponsored posts. Sponsored posts are related with your content and audited by our support team."
                                                             data-html="true" data-original-title="Monetize traffic"
                                                             data-placement="left" data-rel="popover" href="#" rel=
                                                             "popover"></a></span></p>

                                        <p class="row"><label class="span7">Earn extra money</label>
                                            <span class="span7 field"><select class="input-small" id=
                                                                              "show_referer_url" name="show_referer_url" required="">
                                                    <option class="input-small option" id="show_referer_url-0"
                                                            value="1">
                                                        yes
                                                    </option>

                                                    <option class="input-small option" id="show_referer_url-1"
                                                            value="0">
                                                        no
                                                    </option>
                                                </select> <a data-content=
                                                             "Yes: Enable 'Recommended content by Plugz' text under the widget. No: Disable 'Recommended content by Plugz' text under the widget. The text linked with your affiliate ID. If any blogger or webmaster clicks on the link and signup, you get +7% after his revenue."
                                                             data-html="true" data-original-title="Earn extra money"
                                                             data-placement="left" data-rel="popover" href="#" rel=
                                                             "popover"></a></span></p>

                                        <p class="row"><label class="span7">Search Engine Traffic
                                                Enable</label> <span class="span7 field"><select class=
                                                                                             "input-small" id="search_engine_traffic_enable" name=
                                                                                             "search_engine_traffic_enable" required="">
                                                    <option class="input-small option" id=
                                                            "search_engine_traffic_enable-0" value="1">
                                                        yes
                                                    </option>

                                                    <option class="input-small option" id=
                                                            "search_engine_traffic_enable-1" value="0">
                                                        no
                                                    </option>
                                                </select> <a data-content=
                                                             "Yes: After visitor clicks on the widget, he drops to landing page. No: After vistor clicks on the widget, he drops directly to partner's page"
                                                             data-html="true" data-original-title=
                                                             "Search Engine Traffic Enable" data-placement="left" data-rel=
                                                             "popover" href="#" rel="popover"></a></span></p>

                                        <p class="row"><label class="span7">Show Only My
                                                Articles</label> <span class="span7 field"><select class=
                                                                                               "input-small" id="show_only_my_articles" name=
                                                                                               "show_only_my_articles" required="">
                                                    <option class="input-small option" id=
                                                            "show_only_my_articles-0" value="1">
                                                        yes
                                                    </option>

                                                    <option class="input-small option" id=
                                                            "show_only_my_articles-1" selected="selected" value="0">
                                                        no
                                                    </option>
                                                </select> <a data-content=
                                                             "Yes: Only the selected url's plugs will be appear on the widget. No: Other Plugz members articles will appear on the widget. Read more about this at FAQ/Strategies. &lt;br&gt;&lt;br&gt;We recommend: No"
                                                             data-html="true" data-original-title="Show Only My Articles"
                                                             data-placement="left" data-rel="popover" href="#" rel=
                                                             "popover"></a></span></p>

                                        <p class="row" id="show_network_row"><label class="span7">My
                                                Network Trades</label> <span class="span7 field"><select class=
                                                                                                     "input-small" id="show_only_my_trades" name=
                                                                                                     "show_only_my_trades" required="">
                                                    <option class="input-small option" id=
                                                            "show_only_my_trades-0" value="1">
                                                        yes
                                                    </option>

                                                    <option class="input-small option" id=
                                                            "show_only_my_trades-1" selected="selected" value="0">
                                                        no
                                                    </option>
                                                </select> <a data-content="" data-html="true"
                                                             data-original-title="My Network Trades" data-placement="left"
                                                             data-rel="popover" href="#" rel="popover"></a></span></p>
                                    </div>
                                </div>

                                <div class="widgetbox box-success">
                                    <h4 class="widgettitle">Image Settings <a class=
                                                                              "minimize">–</a></h4>

                                    <div class="clearfix widgetcontent">
                                        <p class="row"><label class="span7">Image</label> <span class=
                                                                                                "span7 field"><select class="input-small" id="imageyn" name=
                                                                  "imageyn" required="">
                                                    <option class="input-small option" id="imageyn-0" value=
                                                            "1">
                                                        yes
                                                    </option>

                                                    <option class="input-small option" id="imageyn-1" value=
                                                            "0">
                                                        no
                                                    </option>
                                                </select></span></p>

                                        <p class="row available-with-image"><label class="span7">Image
                                                Type</label> <span class="span7 field"><select class=
                                                                                           "input-small" id="imagetype" name="imagetype" required="">
                                                    <option class="input-small option" id="imagetype-0" value=
                                                            "land">
                                                        landscape
                                                    </option>

                                                    <option class="input-small option" id="imagetype-1" value=
                                                            "port">
                                                        portrait
                                                    </option>

                                                    <option class="input-small option" id="imagetype-2" value=
                                                            "sqau">
                                                        square
                                                    </option>

                                                    <option class="input-small option" id="imagetype-3" value=
                                                            "wide">
                                                        widescreen
                                                    </option>
                                                </select></span></p>

                                        <p class="row available-with-image"><label class="span7">Image
                                                Width</label> <span class="span7 field"><input class=
                                                                                           "input-small" id="imgwidth" name="imgwidth" type="text" value=
                                                                                           "180"></span></p>

                                        <p class="row available-with-image"><label class="span7">Image
                                                Padding</label> <span class="span7 field"><select class=
                                                                                              "input-small" id="padding" name="padding" required="">
                                                    <option class="input-small option" id="padding-0" value=
                                                            "1">
                                                        1px
                                                    </option>

                                                    <option class="input-small option" id="padding-1" value=
                                                            "2">
                                                        2px
                                                    </option>

                                                    <option class="input-small option" id="padding-2" value=
                                                            "3">
                                                        3px
                                                    </option>

                                                    <option class="input-small option" id="padding-3" value=
                                                            "4">
                                                        4px
                                                    </option>

                                                    <option class="input-small option" id="padding-4" value=
                                                            "5">
                                                        5px
                                                    </option>

                                                    <option class="input-small option" id="padding-5" value=
                                                            "6">
                                                        6px
                                                    </option>

                                                    <option class="input-small option" id="padding-6" value=
                                                            "7">
                                                        7px
                                                    </option>

                                                    <option class="input-small option" id="padding-7" value=
                                                            "8">
                                                        8px
                                                    </option>

                                                    <option class="input-small option" id="padding-8" value=
                                                            "9">
                                                        9px
                                                    </option>

                                                    <option class="input-small option" id="padding-9" value=
                                                            "10">
                                                        10px
                                                    </option>
                                                </select></span></p>

                                        <p class="row available-with-image"><label class="span7">Image
                                                Border</label> <span class="span7 field"><input id="bordertype"
                                                                                            name="bordertype" type="hidden" value="solid"> <select class=
                                                                                            "input-small" id="border" name="border" required="">
                                                    <option class="input-small option" id="border-0" value="0">
                                                        0px
                                                    </option>

                                                    <option class="input-small option" id="border-1" value="1">
                                                        1px
                                                    </option>

                                                    <option class="input-small option" id="border-2" value="2">
                                                        2px
                                                    </option>

                                                    <option class="input-small option" id="border-3" value="3">
                                                        3px
                                                    </option>

                                                    <option class="input-small option" id="border-4" value="4">
                                                        4px
                                                    </option>

                                                    <option class="input-small option" id="border-5" value="5">
                                                        5px
                                                    </option>
                                                </select></span></p>

                                        <p class="row available-with-image"><label class="span7">Border
                                                Color</label> <span class="span7 field"><input class=
                                                                                           "input-small" id="imgbdcolor" name="imgbdcolor" type="text"
                                                                                           value="000000"> </span></p>

                                        <p class="row available-with-image"><label class="span7">Hover
                                                Border Color</label> <span class="span7 field"><input class=
                                                                                                  "input-small" id="imgbdcolorhover" name="imgbdcolorhover" type=
                                                                                                  "text" value="000000"> </span></p>

                                        <p class="row"><label class="span7">No. of <span id=
                                                                                         "images-lines">images</span></label> <span class=
                                                                                       "span7 field"><input class="input-small" id="imagenumber" name=
                                                                 "imagenumber" type="text" value="4"></span></p>
                                    </div>
                                </div>

                                <div class="widgetbox box-notice">
                                    <h4 class="widgettitle">Text Settings <a class=
                                                                             "minimize">–</a></h4>

                                    <div class="clearfix widgetcontent">
                                        <p class="row available-with-image"><label class="span7">Text
                                                Available</label> <span class="span7 field"><select class=
                                                                                                "input-small" id="titleyn" name="titleyn" required="">
                                                    <option class="input-small option" id="titleyn-0" value=
                                                            "1">
                                                        yes
                                                    </option>

                                                    <option class="input-small option" id="titleyn-1" value=
                                                            "0">
                                                        no
                                                    </option>
                                                </select></span></p>

                                        <p class="row available-with-image"><label class=
                                                                                   "span7">Position</label> <span class=
                                                                                   "span7 field"><select class="input-small" id="textpos" name=
                                                                  "textpos" required="">
                                                    <option class="input-small option" id="textpos-0" value=
                                                            "2">
                                                        under the image
                                                    </option>

                                                    <option class="input-small option" id="textpos-1" value=
                                                            "1">
                                                        on the image
                                                    </option>

                                                    <option class="input-small option" id="textpos-2" value=
                                                            "3">
                                                        above the image
                                                    </option>

                                                    <option class="input-small option" id="textpos-3" value=
                                                            "4">
                                                        right side of the image
                                                    </option>
                                                </select></span></p>

                                        <p class="row available-without-image"><label class=
                                                                                      "span7">Enable site link</label> <span class=
                                                                                      "span7 field"><select class="input-small" id="sitelink" name=
                                                                  "sitelink" required="">
                                                    <option class="input-small option" id="sitelink-0" value=
                                                            "1">
                                                        yes
                                                    </option>

                                                    <option class="input-small option" id="sitelink-1"
                                                            selected="selected" value="0">
                                                        no
                                                    </option>
                                                </select></span></p>

                                        <p class="row"><label class="span7">Background color</label>
                                            <span class="span7 field"><input class="input-small" id=
                                                                             "opacolor" name="opacolor" type="text" value="000000">
                                                <input id="opacolor_rgba" name="opacolor_rgba" type="hidden"
                                                       value="0,0,0,"> <input id="opacolor_rgb" name="opacolor_rgb"
                                                       type="hidden" value="0,0,0"> <input id="opacolor_r" name=
                                                       "opacolor_r" type="hidden" value="0"> <input id="opacolor_g"
                                                       name="opacolor_g" type="hidden" value="0"> <input id=
                                                       "opacolor_b" name="opacolor_b" type="hidden" value="0">
                                                <input id="opacolor_a" name="opacolor_a" type="hidden" value=
                                                       "0"> </span></p>

                                        <p class="row"><label class="span7">Background opacity</label>
                                            <span class="span7 field"><select class="input-small" id=
                                                                              "opacity" name="opacity" required="">
                                                    <option class="input-small option" id="opacity-0" value=
                                                            "40">
                                                        40%
                                                    </option>

                                                    <option class="input-small option" id="opacity-1" value=
                                                            "60">
                                                        60%
                                                    </option>

                                                    <option class="input-small option" id="opacity-2" value=
                                                            "80">
                                                        80%
                                                    </option>

                                                    <option class="input-small option" id="opacity-3" value=
                                                            "100">
                                                        100%
                                                    </option>
                                                </select></span></p>

                                        <p class="row"><label class="span7">Align</label> <span class=
                                                                                                "span7 field"><select class="input-small" id="textalign" name=
                                                                  "textalign" required="">
                                                    <option class="input-small option" id="textalign-0" value=
                                                            "left">
                                                        left
                                                    </option>

                                                    <option class="input-small option" id="textalign-1" value=
                                                            "right">
                                                        right
                                                    </option>

                                                    <option class="input-small option" id="textalign-2" value=
                                                            "center">
                                                        center
                                                    </option>
                                                </select></span></p>

                                        <p class="row"><label class="span7">Hover</label> <span class=
                                                                                                "span7 field"><select class="input-small" id="hover" name=
                                                                  "hover" required="">
                                                    <option class="input-small option" id="hover-0" value=
                                                            "none">
                                                        none
                                                    </option>

                                                    <option class="input-small option" id="hover-1" value=
                                                            "underline">
                                                        underline
                                                    </option>
                                                </select></span></p>

                                        <p class="row"><label class="span7">Font Family</label>
                                            <span class="span7 field"><select class="input-small" id=
                                                                              "fontfamily" name="fontfamily" required="">
                                                    <option class="input-small option" id="fontfamily-0" value=
                                                            "Arial">
                                                        Arial
                                                    </option>

                                                    <option class="input-small option" id="fontfamily-1" value=
                                                            "Courier">
                                                        Courier
                                                    </option>

                                                    <option class="input-small option" id="fontfamily-2" value=
                                                            "Georgia">
                                                        Georgia
                                                    </option>

                                                    <option class="input-small option" id="fontfamily-3" value=
                                                            "Helvetica">
                                                        Helvetica
                                                    </option>

                                                    <option class="input-small option" id="fontfamily-4" value=
                                                            "Verdana">
                                                        Verdana
                                                    </option>

                                                    <option class="input-small option" id="fontfamily-5" value=
                                                            "Custom">
                                                        Custom
                                                    </option>
                                                </select></span></p>

                                        <p class="row"><label class="span7">Custom Font</label>
                                            <span class="span7 field"><input autocomplete="off" class=
                                                                             "input-small" data-provide="typeahead" id="cff" name="cff"
                                                                             type="text"></span></p>

                                        <p class="row"><label class="span7">Size</label> <span class=
                                                                                               "span7 field"><select class="input-small" id="fontsize" name=
                                                                  "fontsize" required="">
                                                    <option class="input-small option" id="fontsize-0" value=
                                                            "8">
                                                        8px
                                                    </option>

                                                    <option class="input-small option" id="fontsize-1" value=
                                                            "9">
                                                        9px
                                                    </option>

                                                    <option class="input-small option" id="fontsize-2" value=
                                                            "10">
                                                        10px
                                                    </option>

                                                    <option class="input-small option" id="fontsize-3" value=
                                                            "11">
                                                        11px
                                                    </option>

                                                    <option class="input-small option" id="fontsize-4"
                                                            selected="selected" value="12">
                                                        12px
                                                    </option>

                                                    <option class="input-small option" id="fontsize-5" value=
                                                            "13">
                                                        13px
                                                    </option>

                                                    <option class="input-small option" id="fontsize-6" value=
                                                            "14">
                                                        14px
                                                    </option>

                                                    <option class="input-small option" id="fontsize-7" value=
                                                            "15">
                                                        15px
                                                    </option>

                                                    <option class="input-small option" id="fontsize-8" value=
                                                            "16">
                                                        16px
                                                    </option>

                                                    <option class="input-small option" id="fontsize-9" value=
                                                            "17">
                                                        17px
                                                    </option>

                                                    <option class="input-small option" id="fontsize-10" value=
                                                            "18">
                                                        18px
                                                    </option>

                                                    <option class="input-small option" id="fontsize-11" value=
                                                            "19">
                                                        19px
                                                    </option>

                                                    <option class="input-small option" id="fontsize-12" value=
                                                            "20">
                                                        20px
                                                    </option>
                                                </select></span></p>

                                        <p class="row"><label class="span7">Weight</label> <span class=
                                                                                                 "span7 field"><select class="input-small" id="fontweight" name=
                                                                  "fontweight" required="">
                                                    <option class="input-small option" id="fontweight-0" value=
                                                            "normal">
                                                        normal
                                                    </option>

                                                    <option class="input-small option" id="fontweight-1" value=
                                                            "bold">
                                                        bold
                                                    </option>
                                                </select></span></p>

                                        <p class="row"><label class="span7">Style</label> <span class=
                                                                                                "span7 field"><select class="input-small" id="fontstyle" name=
                                                                  "fontstyle" required="">
                                                    <option class="input-small option" id="fontstyle-0" value=
                                                            "normal">
                                                        normal
                                                    </option>

                                                    <option class="input-small option" id="fontstyle-1" value=
                                                            "italic">
                                                        italic
                                                    </option>
                                                </select></span></p>

                                        <p class="row"><label class="span7">Color</label> <span class=
                                                                                                "span7 field"><input class="input-small" id="fontcolor" name=
                                                                 "fontcolor" type="text" value="000000"> </span></p>

                                        <p class="row"><label class="span7">Hover Color</label>
                                            <span class="span7 field"><input class="input-small" id=
                                                                             "hovertextcolor" name="hovertextcolor" type="text" value=
                                                                             "000000"> </span></p>

                                        <p class="row"><label class="span7">Title length</label>
                                            <span class="span7 field"><select class="input-small" id=
                                                                              "titlelength" name="titlelength" required="">
                                                    <option class="input-small option" id="titlelength-0"
                                                            value="full">
                                                        multiple lines
                                                    </option>

                                                    <option class="input-small option" id="titlelength-1"
                                                            value="trimmed">
                                                        single line
                                                    </option>
                                                </select></span></p>

                                        <p class="row"><label class="span7">Number of letters</label>
                                            <span class="span7 field"><input class="input-small" id=
                                                                             "letternum" name="letternum" type="text" value="25"></span></p>
                                    </div>
                                </div>

                                <div class="widgetbox box-warning">
                                    <h4 class="widgettitle">Niche Settings <a class=
                                                                              "minimize">–</a></h4>

                                    <div class="clearfix widgetcontent">
                                        <p class="row adult no_w" id="sexual_orientation_field">
                                            <label class="span7">Sexual Orientation</label> <span class=
                                                                                                  "span7 field"><select class="input-small" id=
                                                                  "sexual_orientation" name="sexual_orientation" required="">
                                                    <option class="input-small option" id=
                                                            "sexual_orientation-0" value="straight">
                                                        straight
                                                    </option>

                                                    <option class="input-small option" id=
                                                            "sexual_orientation-1" value="gay">
                                                        gay
                                                    </option>
                                                </select></span></p>

                                        <p class="row adult no_w control-group" id=
                                           "straight_tags_field"><label class="span7">Categories</label>
                                            <span class="span7 field"><input id="straight" name="straight"
                                                                             style="width:90%" type="text" value=""></span></p>

                                        <p class="row adult no_w" id="gay_tags_field"><label class=
                                                                                             "span7">Categories</label> <span class="span7 field"><input id=
                                                                                                        "gay" name="gay" style="width:90%" type="text" value=
                                                                                                        ""></span></p>

                                        <p class="row adult no_w" id="adult_tags_field"><label class=
                                                                                               "span7">Tags</label> <span class="span7 field"><input id=
                                                                                                  "adult_tags" name="adult_tags" style="width:90%" type="text"
                                                                                                  value=""> <span class="help-inline">You can type any manual
                                                    tags. Separate with 'Enter'</span></span></p>

                                        <p class="row no_w" id="nonadult_parent_tags_field">
                                            <label class="span7">Main Categories</label> <span class=
                                                                                               "span7 field"><input id="nonadult_parent" name=
                                                                 "nonadult_parent" style="width:90%" type="text" value=
                                                                 ""></span></p>

                                        <p class="row no_w" id="nonadult_tags_field"><label class=
                                                                                            "span7">Tags</label> <span class="span7 field"><input id=
                                                                                                  "nonadult" name="nonadult" style="width:90%" type="text" value=
                                                                                                  ""> </span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div><!--messagepanel-->

        <div id="busy"></div>
    </div><!--maincontentinner-->
</div><!--maincontent-->
</div><!--mainwrapper-->
<script>
var is_adult = <?php echo ($plugz['rating'] == 'mainstream' ? 'false' : 'true') ?>;
var allow_network = false;
var first_run = true;
var defaultForm = '';
var engineDomain = '<?php echo ($plugz['rating'] == 'mainstream' ? 'plugs.co' : 'plugerr.com') ?>';
var widgetUrl = '<?= $_SERVER['REQUEST_URI'] . '&noheader=true'; ?>';
var pluginPath = '<?= plugins_url() . '/' . PLUGZ_PLUGIN_NAME; ?>';

function convertHex(hex, opacity) {
    hex = hex.replace('#', '');
    r = parseInt(hex.substring(0, 2), 16);
    g = parseInt(hex.substring(2, 4), 16);
    b = parseInt(hex.substring(4, 6), 16);

    $("#opacolor_r").val(r);
    $("#opacolor_g").val(g);
    $("#opacolor_b").val(b);

    if (opacity != undefined) {
        $("#opacolor_a").val(opacity / 100);
        result = 'rgba(' + r + ',' + g + ',' + b + ',' + opacity / 100 + ')';
    } else {
        result = 'rgb(' + r + ',' + g + ',' + b + ')';
    }

    return result;
}

$(document).ready(function() {
    var slidingContainer = $("#slidingContainer").css('position', 'relative');
    var slidingContent = $("#slidingContent");
    var view = $(window);

    $('#widgetTemplates').slimscroll({
        color: '#666',
        size: '10px',
        width: 'auto',
        height: '325px'
    });

    $('#widgetTemplates .entrylist li').css('cursor', 'pointer').css('cursor', 'hand').click(function(event) {
        event.preventDefault();
        $("#widget_form").unserializeForm(defaultForm);

        var attrs = $(this).data();
        $.each(attrs, function(key, value) {
            $("#" + key).val(value);
        });
        $("#opacolor").parent().find('span').css('backgroundColor', '#' + $('#opacolor').val());
        $("#imgbdcolor").parent().find('span').css('backgroundColor', '#' + $('#imgbdcolor').val());
        $("#imgbdcolorhover").parent().find('span').css('backgroundColor', '#' + $('#imgbdcolorhover').val());
        $("#fontcolor").parent().find('span').css('backgroundColor', '#' + $('#fontcolor').val());
        $("#hovertextcolor").parent().find('span').css('backgroundColor', '#' + $('#hovertextcolor').val());

        $("#name").val($(this).find('h4').text());
        showPreview($("#website").val());
    });

    view.bind(
            "scroll resize",
            function() {
                var slidingContainerTop = slidingContainer.offset().top;
                var slidingContentHeight = slidingContent.height();
                var slidingContainerBottom = slidingContainerTop + slidingContainer.closest(".row-fluid").height();
                var viewTop = view.scrollTop();

                if (view.width() > 755 && (viewTop + 5 > slidingContainerTop)
                        && (viewTop + slidingContentHeight < slidingContainerBottom)
                        && slidingContainer.closest(".row-fluid").height() - 30 > slidingContentHeight) {
                    slidingContent.css({
                        'top': '5px',
                        'bottom': 'auto',
                        'width': slidingContainer.width(),
                        'position': 'fixed',
                    });
                } else if (view.width() > 755 && viewTop + 5 > slidingContainerTop
                        && slidingContainer.closest(".row-fluid").height() - 30 > slidingContentHeight) {
                    slidingContent.css({
                        'top': (slidingContainer.closest(".row-fluid").height() - slidingContentHeight) + 'px',
                        'width': slidingContainer.width(),
                        'position': 'absolute',
                    });
                } else {
                    slidingContent.css({
                        'top': '0px',
                        'bottom': 'auto',
                        'width': 'auto',
                        'position': 'relative',
                    });
                }
            }
    );

    $('a[rel=popover]').click(function(e) {
        e.preventDefault();
    }).popover({trigger: 'hover'});

    $("#name_fieldset").hide();
    $("#submit_fieldset").hide();
    $("#preview, #widget_code").hide();


    $('#imagenumber').spinner({min: 1, max: 30, defaultStep: 1});
    $('#letternum').spinner({min: 2, max: 200, defaultStep: 2});
    $('#imgwidth').spinner({min: 15, max: 600, defaultStep: 10});

    $(document).on('change', '#imageyn', function() {
        if ($(this).val() == 1) {
            $("#images-lines").text('images');
            $(".available-without-image").hide();
            $(".available-with-image").show();
        } else {
            $("#images-lines").text('lines');
            $(".available-without-image").show();
            $(".available-with-image").hide();
        }
    });

    $('#imageyn').trigger('change');

    $('#opacolor').ColorPicker({
        color: $('#imgbdcolor').val(),
        onShow: function(colpkr) {
            jQuery(colpkr).fadeIn(500);
            return false;
        },
        onHide: function(colpkr) {
            jQuery(colpkr).hide();
            createEmbedCode($("#website").val());
            return false;
        },
        onChange: function(hsb, hex, rgb) {
            $("#opacolor").parent().find('span').css('backgroundColor', '#' + hex);
            $("#opacolor").val(hex).trigger('change');
            $("#opacolor").ColorPicker().trigger('changeColor');
        }
    });
    $("#opacolor").parent().find('span').css('backgroundColor', '#' + $('#opacolor').val());

    $('#imgbdcolor').ColorPicker({
        color: $('#imgbdcolor').val(),
        onShow: function(colpkr) {
            jQuery(colpkr).fadeIn(500);
            return false;
        },
        onHide: function(colpkr) {
            jQuery(colpkr).hide();
            createEmbedCode($("#website").val());
            return false;
        },
        onChange: function(hsb, hex, rgb) {
            $("#imgbdcolor").parent().find('span').css('backgroundColor', '#' + hex);
            $("#imgbdcolor").val(hex).trigger('change');
            $("#imgbdcolor").ColorPicker().trigger('changeColor');
        }
    });
    $("#imgbdcolor").parent().find('span').css('backgroundColor', '#' + $('#imgbdcolor').val());

    $('#imgbdcolorhover').ColorPicker({
        color: $('#imgbdcolorhover').val(),
        onShow: function(colpkr) {
            jQuery(colpkr).fadeIn(500);
            return false;
        },
        onHide: function(colpkr) {
            jQuery(colpkr).hide();
            createEmbedCode($("#website").val());
            return false;
        },
        onChange: function(hsb, hex, rgb) {
            $("#imgbdcolorhover").parent().find('span').css('backgroundColor', '#' + hex);
            $("#imgbdcolorhover").val(hex).trigger('change');
            $("#imgbdcolorhover").ColorPicker().trigger('changeColor');
        }
    });
    $("#imgbdcolorhover").parent().find('span').css('backgroundColor', '#' + $('#imgbdcolorhover').val());

    $('#fontcolor').ColorPicker({
        color: $('#fontcolor').val(),
        onShow: function(colpkr) {
            jQuery(colpkr).fadeIn(500);
            return false;
        },
        onHide: function(colpkr) {
            jQuery(colpkr).hide();
            createEmbedCode($("#website").val());
            return false;
        },
        onChange: function(hsb, hex, rgb) {
            $("#fontcolor").parent().find('span').css('backgroundColor', '#' + hex);
            $("#fontcolor").val(hex).trigger('change');
            $("#fontcolor").ColorPicker().trigger('changeColor');
        }
    });
    $("#fontcolor").parent().find('span').css('backgroundColor', '#' + $('#fontcolor').val());

    $('#hovertextcolor').ColorPicker({
        color: $('#hovertextcolor').val(),
        onShow: function(colpkr) {
            jQuery(colpkr).fadeIn(500);
            return false;
        },
        onHide: function(colpkr) {
            jQuery(colpkr).hide();
            createEmbedCode($("#website").val());
            return false;
        },
        onChange: function(hsb, hex, rgb) {
            $("#hovertextcolor").parent().find('span').css('backgroundColor', '#' + hex);
            $("#hovertextcolor").val(hex).trigger('change');
            $("#hovertextcolor").ColorPicker().trigger('changeColor');
        }
    });
    $("#hovertextcolor").parent().find('span').css('backgroundColor', '#' + $('#hovertextcolor').val());

    $("#opacolor").ColorPicker().on('changeColor', function(ev) {
        $("#opacolor_rgba").val(convertHex($("#opacolor").val(), $("#opacity").val()));
        $("#opacolor_rgb").val(convertHex($("#opacolor").val()));
    });

    $("#opacity").change(function() {
        $("#opacolor").ColorPicker().trigger('changeColor');
    })

    $("#hovertextcolor").parent().find('span').css('backgroundColor', '#' + $('#hovertextcolor').val());

    $(".colorselector").click(function() {
        $(this).parent().find('input').trigger('click');
    });

    $("#textpos").change(function() {
        if ($(this).val() == 1) {
            $("#opacolor").closest('p').show();
            $("#opacity").closest('p').show();
        } else {
            $("#opacolor").closest('p').hide();
            $("#opacity").closest('p').hide();
        }
    });

    $("#website").change(function() {
        var $website = $(this);

        if ($website.val() != '') {
            detectab();
        }

        if (!first_run) {
            var tagsa = [
                document.getElementById("straight"),
                document.getElementById("gay"),
                document.getElementById("adult_tags"),
                document.getElementById("nonadult_parent"),
                document.getElementById("nonadult")
            ];

            for (i = 0; i < tagsa.length; i++) {
                if (tagsa[i])
                    tagsa[i].value = '';
            }
        }

        $("#textpos").trigger('change');
        $("#sexual_orientation").trigger('change');
        showPreview($($website).val());
    });

    $("#gay").select2({
        width: "90%",
        maximumSelectionSize: 8,
        data: [{"id": "amateur", "text": "amateur"}, {"id": "anal", "text": "anal"}, {"id": "anime", "text": "anime"}, {"id": "asian", "text": "asian"}, {"id": "BDSM", "text": "BDSM"}, {"id": "bear", "text": "bear"}, {"id": "big cock", "text": "big cock"}, {"id": "bisexual", "text": "bisexual"}, {"id": "blowjob", "text": "blowjob"}, {"id": "butts", "text": "butts"}, {"id": "couples", "text": "couples"}, {"id": "creampie", "text": "creampie"}, {"id": "cumshots", "text": "cumshots"}, {"id": "daddies", "text": "daddies"}, {"id": "dating", "text": "dating"}, {"id": "DP", "text": "DP"}, {"id": "dildos\/toys", "text": "dildos\/toys"}, {"id": "ebony", "text": "ebony"}, {"id": "european", "text": "european"}, {"id": "facial", "text": "facial"}, {"id": "fetish", "text": "fetish"}, {"id": "fingering", "text": "fingering"}, {"id": "fisting", "text": "fisting"}, {"id": "fursuits", "text": "fursuits"}, {"id": "general gay", "text": "general gay"}, {"id": "german", "text": "german"}, {"id": "group sex", "text": "group sex"}, {"id": "gonzo", "text": "gonzo"}, {"id": "handjob", "text": "handjob"}, {"id": "hunks", "text": "hunks"}, {"id": "hentai", "text": "hentai"}, {"id": "interracial", "text": "interracial"}, {"id": "jerk-off", "text": "jerk-off"}, {"id": "kissing", "text": "kissing"}, {"id": "latino", "text": "latino"}, {"id": "massage", "text": "massage"}, {"id": "masturbate", "text": "masturbate"}, {"id": "muscle guys", "text": "muscle guys"}, {"id": "muscle worship", "text": "muscle worship"}, {"id": "my cock", "text": "my cock"}, {"id": "POV", "text": "POV"}, {"id": "public", "text": "public"}, {"id": "rimming", "text": "rimming"}, {"id": "shaved", "text": "shaved"}, {"id": "shemale", "text": "shemale"}, {"id": "solo male", "text": "solo male"}, {"id": "swallow", "text": "swallow"}, {"id": "teen", "text": "teen"}, {"id": "threesome", "text": "threesome"}, {"id": "twinks", "text": "twinks"}, {"id": "underwear", "text": "underwear"}, {"id": "vintage", "text": "vintage"}, {"id": "voyeur", "text": "voyeur"}, {"id": "webcam", "text": "webcam"}, {"id": "young\/old", "text": "young\/old"}],
        tags: false,
        tokenSeparators: [","],
        initSelection: function(element, callback) {
            var id = $(element).val();
            if (id !== "") {
            }
        },
        formatSelectionTooBig: function(limit) {
            return "Max. " + limit + " categories.";
        }
    });

    $("#straight").select2({
        width: "90%",
        maximumSelectionSize: 8,
        data: [{"id": "amateur", "text": "amateur"}, {"id": "anal", "text": "anal"}, {"id": "anime", "text": "anime"}, {"id": "asian", "text": "asian"}, {"id": "ass", "text": "ass"}, {"id": "babe", "text": "babe"}, {"id": "bbw", "text": "bbw"}, {"id": "bdsm\/fetish", "text": "bdsm\/fetish"}, {"id": "big boobs", "text": "big boobs"}, {"id": "bikini", "text": "bikini"}, {"id": "beach", "text": "beach"}, {"id": "blowjob", "text": "blowjob"}, {"id": "cartoon", "text": "cartoon"}, {"id": "celebs", "text": "celebs"}, {"id": "cumshot", "text": "cumshot"}, {"id": "dating", "text": "dating"}, {"id": "ebony", "text": "ebony"}, {"id": "emo", "text": "emo"}, {"id": "erotica\/art", "text": "erotica\/art"}, {"id": "exgirlfriend", "text": "exgirlfriend"}, {"id": "glamour", "text": "glamour"}, {"id": "gothic", "text": "gothic"}, {"id": "group sex", "text": "group sex"}, {"id": "homemade", "text": "homemade"}, {"id": "latina", "text": "latina"}, {"id": "lesbian", "text": "lesbian"}, {"id": "masturbation", "text": "masturbation"}, {"id": "milf", "text": "milf"}, {"id": "nonnude", "text": "nonnude"}, {"id": "panty\/lingerie", "text": "panty\/lingerie"}, {"id": "porn", "text": "porn"}, {"id": "pornstar", "text": "pornstar"}, {"id": "pregnant", "text": "pregnant"}, {"id": "public\/outdoor", "text": "public\/outdoor"}, {"id": "shemale", "text": "shemale"}, {"id": "selfshot", "text": "selfshot"}, {"id": "squirting", "text": "squirting"}, {"id": "teen", "text": "teen"}, {"id": "threesome", "text": "threesome"}, {"id": "toys", "text": "toys"}, {"id": "voyeur", "text": "voyeur"}, {"id": "webcam", "text": "webcam"}],
        tags: false,
        tokenSeparators: [","],
        initSelection: function(element, callback) {
            var id = $(element).val();
            if (id !== "") {
            }
        },
        formatSelectionTooBig: function(limit) {
            return "Max. " + limit + " categories.";
        }
    });


    $("#adult_tags").select2({
        width: "90%",
        maximumSelectionSize: 8,
        tags: [],
        tokenSeparators: [","],
        formatSelectionTooBig: function(limit) {
            return "Max. " + limit + " categories.";
        }
    });

    $("#nonadult_parent").select2({
        width: "90%",
        maximumSelectionSize: 8,
        data: [{"id": "sport", "text": "sport"}, {"id": "girls", "text": "girls"}, {"id": "animals", "text": "animals"}, {"id": "humor", "text": "humor"}, {"id": "lifestyle", "text": "lifestyle"}, {"id": "gaming", "text": "gaming"}, {"id": "tech & science & geeky", "text": "tech & science & geeky"}, {"id": "entertainment", "text": "entertainment"}, {"id": "celebrity", "text": "celebrity"}],
        tags: false,
        tokenSeparators: [","],
        initSelection: function(element, callback) {
            var id = $(element).val();
            if (id !== "") {
            }
        },
        formatSelectionTooBig: function(limit) {
            return "Max. " + limit + " categories.";
        }
    });

    $("#nonadult").select2({
        width: "90%",
        multiple: true,
        tags: [],
        ajax: {
            url: widgetUrl + '&nonadult=1',
            dataType: 'json',
            data: function(term, page) {
                var parent_tags;
                parent_tags = $("#nonadult_parent").val();
                return {
                    parents: parent_tags,
                    q: term
                }
            },
            results: function(data, page) {
                return {results: data};
            }
        },
        maximumSelectionSize: 8,
        formatSelectionTooBig: function(limit) {
            return "Max. " + limit + " tags.";
        },
        tokenSeparators: [","]
    });

    $('#nonadult').on('select2-selecting', function(e) {
        $('#nonadult_tags_field .help-inline').html('You can type any manual tags. Separate with \'Enter\'');
    });

    $("#nonadult_parent").change(function() {
        if ($("#nonadult_parent").val() != '') {
            $("#nonadult_tags_field").show();
        } else {
            $("#nonadult_tags_field").hide();
            $("#nonadult_tags").select2('data', null);
        }
    });

    $("#straight, #gay").change(function() {
        if (!first_run) {
            if ($("#straight").val() != '' || $("#gay").val() != '') {
                $("#adult_tags_field").show();
            } else {
                $("#adult_tags_field").hide();
                $("#adult_tags").select2('data', null);
            }
        }
    });

    $("#sexual_orientation").change(function() {
        if (is_adult) {
            $("#sexual_orientation_field, #widgettype").show();

            if ($(this).val() == 'straight') {
                $("#straight_tags_field").show();
                $("#gay_tags_field").hide();

                if (!first_run) {
                    $("#gay").select2('data', null);
                    $("#adult_tags").select2('data', null);
                }
            } else {
                $("#straight_tags_field").hide();
                $("#gay_tags_field").show();

                if (!first_run) {
                    $("#straight").select2('data', null);
                    $("#adult_tags").select2('data', null);
                }
            }

            $("#adult_tags_field").show();

            if (!first_run) {
                $("#straight").trigger('change');
            }

            $("#nonadult_tags_field, #nonadult_parent_tags_field").hide();
        } else {
            $("#sexual_orientation_field").hide();
            $("#adult_tags_field, #straight_tags_field, #gay_tags_field").hide();
            $("#nonadult_parent_tags_field").show();
            if ($("#nonadult_parent").val() == '') {
                $("#nonadult_tags_field").hide();
            }
        }
    });

    $("#widgetTemplates .entrylist li:first").trigger('click');
    $("#website").trigger('change');

    $(".widgetbox input, .widgetbox select").change(function() {
        createEmbedCode($("#website").val());
    });

    $("#show_network_row").hide();

    $("#show_only_my_articles").change(function() {
        if (allow_network) {
            if ($("#show_only_my_articles").val() == 1) {
                $("#show_only_my_trades").val('0');
                $("#show_network_row").show();
            } else {
                $("#show_only_my_trades").val('0');
                $("#show_network_row").hide();
            }
        } else {
            $("#show_only_my_trades").val('0');
            $("#show_network_row").hide();
        }
    });

    $('.minimize').click(function() {
        view.trigger("resize");
    });

    $('.widgettitle').css('cursor', 'pointer').click(function(event) {
        event.stopPropagation();
        $('.minimize:first', this).trigger('click');
    });
    $('.minimize').not(".keep-maximized").trigger('click');

    $('button#save').click(function(event) {
        event.preventDefault();
        $("#busy").show();
        $('button#save').prop('disabled', true);
        $.post(widgetUrl + '&cb=' + (Math.random() * 10000000), $("form").serialize(), function(data) {
            $('#widget_id').val(data.id);
            $('#widget_code').val('<' + 'script type="text/javascript" src="http://plug.' + engineDomain + '/widget/' + data.uri + '"><' + '/script>');
        }).done(function() {
            $("#busy").hide();
            $('button#save').prop('disabled', false);
            $("#widget_code").show().focus().select();
        });
    });

    $("#widget_code").click(function(event) {
        event.preventDefault();
        $(this).focus().select();
    });

    $("#opacity").trigger('change');

    $('#fontfamily').change(function() {
        if ($(this).val() == 'Custom') {
            $('#cff').focus().trigger('click');
        } else {
            $('#cff').val('');
        }
    });

    $('#cff').typeahead({
        source: ['Open Sans', 'Roboto', 'Oswald', 'Lato', 'Droid Sans', 'Open Sans Condensed', 'PT Sans', 'Source Sans Pro', 'Roboto Condensed', 'Droid Serif', 'Ubuntu', 'Montserrat', 'Raleway', 'PT Sans Narrow', 'Yanone Kaffeesatz', 'Lora', 'Arimo', 'Oxygen', 'Roboto Slab', 'Arvo', 'Lobster', 'Bitter', 'Merriweather', 'Francois One', 'Dosis', 'Varela Round', 'Titillium Web', 'Noto Sans', 'PT Serif', 'Cabin', 'Play', 'Indie Flower', 'Shadows Into Light', 'Playfair Display', 'Ubuntu Condensed', 'Inconsolata', 'Abel', 'Libre Baskerville', 'Nunito', 'Rokkitt', 'Archivo Narrow', 'Cuprum', 'Muli', 'Signika', 'Fjalla One', 'Istok Web', 'Maven Pro', 'Josefin Sans', 'Armata', 'Anton', 'Asap', 'Pacifico', 'Vollkorn', 'Bree Serif', 'Merriweather Sans', 'Poiret One', 'Crafty Girls', 'Coming Soon', 'Dancing Script', 'Questrial', 'Quicksand', 'Hammersmith One', 'PT Sans Caption', 'Nobile', 'Special Elite', 'Alegreya', 'Karla', 'Cabin Condensed', 'Droid Sans Mono', 'Exo', 'Audiowide', 'Noto Serif', 'Changa One', 'Crete Round', 'News Cycle', 'Pontano Sans', 'Oleo Script', 'Rubik One', 'Chewy', 'Ropa Sans', 'Pathway Gothic One', 'Philosopher', 'Squada One', 'Gudea', 'Varela', 'Kreon', 'Monda', 'Ubuntu Mono', 'Voltaire', 'Playfair Display SC', 'Gloria Hallelujah', 'Crimson Text', 'Bangers', 'Gilda Display', 'Playball', 'Economica', 'Josefin Slab', 'Patua One', 'Rock Salt', 'Montserrat Alternates', 'Pinyon Script', 'Old Standard TT', 'Quattrocento Sans', 'Righteous', 'Cantarell', 'Noticia Text', 'Luckiest Guy', 'Black Ops One', 'Permanent Marker', 'Lobster Two', 'Lemon', 'Amatic SC', 'Sanchez', 'BenchNine', 'Tinos', 'Bevan', 'EB Garamond', 'Gentium Book Basic', 'Source Code Pro', 'Architects Daughter', 'Archivo Black', 'Handlee', 'Comfortaa', 'Fredoka One', 'Satisfy', 'Amaranth', 'Shadows Into Light Two', 'Passion One', 'Jockey One', 'Domine', 'Calligraffitti', 'Griffy', 'Covered By Your Grace', 'Cardo', 'Waiting for the Sunrise', 'Marvel', 'Cinzel', 'Molengo', 'Orbitron', 'Scada', 'Lusitana', 'Vidaloka', 'Yellowtail', 'Cherry Cream Soda', 'Quattrocento', 'Kaushan Script', 'Chivo', 'Paytone One', 'Russo One', 'Patrick Hand', 'Cantata One', 'Overlock', 'Actor', 'Reenie Beanie', 'Carme', 'Antic Slab', 'Goudy Bookletter 1911', 'Spirax', 'Alike', 'Enriqueta', 'Exo 2', 'Marck Script', 'Tangerine', 'Walter Turncoat', 'Didact Gothic', 'Fanwood Text', 'Allerta', 'Syncopate', 'Doppio One', 'Signika Negative', 'Rambla', 'Sigmar One', 'Neuton', 'Rancho', 'Coda', 'Kameron', 'Carrois Gothic', 'Copse', 'Rosario', 'Just Another Hand', 'Courgette', 'Glegoo', 'Trocchi', 'Neucha', 'Nothing You Could Do', 'Aldrich', 'Great Vibes', 'Sorts Mill Goudy', 'Telex', 'Ruda', 'Damion', 'Fugaz One', 'Alfa Slab One', 'Just Me Again Down Here', 'Share', 'Sintony', 'Viga', 'Marmelad', 'Jura', 'Convergence', 'Electrolize', 'Metrophobic', 'Bad Script', 'Spinnaker', 'Sancreek', 'Coustard', 'Denk One', 'Homemade Apple', 'Michroma', 'Arbutus Slab', 'Schoolbell', 'Aclonica', 'Fauna One', 'Abril Fatface', 'Niconne', 'Unkempt', 'Allerta Stencil', 'Nova Square', 'ABeeZee', 'Rochester', 'Prata', 'Radley', 'Orienta', 'Inder', 'Advent Pro', 'Alegreya Sans', 'Volkhov', 'Iceland', 'Racing Sans One', 'PT Serif Caption', 'Gentium Basic', 'Julius Sans One', 'Alice', 'Magra', 'Judson', 'Sansita One', 'Berkshire Swash', 'Gochi Hand', 'Fontdiner Swanky', 'Cousine', 'Six Caps', 'Cabin Sketch', 'Nixie One', 'Tauri', 'Boogaloo', 'Puritan', 'Cutive', 'Coda Caption', 'Cookie', 'Mako', 'The Girl Next Door', 'Days One', 'Duru Sans', 'Love Ya Like A Sister', 'Arapey', 'Parisienne', 'Belleza', 'Loved by the King', 'Homenaje', 'Allura', 'Quando', 'Slackey', 'Fredericka the Great', 'Candal', 'Merienda One', 'Crushed', 'Caudex', 'Lekton', 'IM Fell English', 'Adamina', 'Average Sans', 'Ultra', 'Acme', 'Englebert', 'Strait', 'Sacramento', 'Leckerli One', 'Basic', 'Gruppo', 'Kranky', 'Petit Formal Script', 'Kristi', 'Yeseva One', 'Ovo', 'Tenor Sans', 'Shanti', 'Brawler', 'Alef', 'Andika', 'Marcellus SC', 'Kotta One', 'Quantico', 'Tulpen One', 'Alegreya Sans SC', 'Give You Glory', 'Contrail One', 'Kavoon', 'Headland One', 'Pompiere', 'Sunshiney', 'Bentham', 'Forum', 'Yesteryear', 'Limelight', 'Lilita One', 'Anaheim', 'Anonymous Pro', 'Salsa', 'Andada', 'Chau Philomene One', 'Metamorphous', 'Alex Brush', 'Tienne', 'Codystar', 'Alegreya SC', 'Kelly Slab', 'La Belle Aurore', 'Montez', 'Podkova', 'Donegal One', 'Carrois Gothic SC', 'Wire One', 'Megrim', 'Allan', 'Delius', 'Lustria', 'IM Fell DW Pica', 'Merienda', 'Mountains of Christmas', 'Short Stack', 'Sue Ellen Francisco', 'Zeyada', 'Carter One', 'Federo', 'Belgrano', 'Corben', 'Lily Script One', 'Annie Use Your Telescope', 'Gafata', 'Capriola', 'Over the Rainbow', 'Holtwood One SC', 'Nova Round', 'Averia Sans Libre', 'Happy Monkey', 'Antic', 'Imprima', 'Kite One', 'Oregano', 'Average', 'Patrick Hand SC', 'Voces', 'Rationale', 'Share Tech', 'IM Fell DW Pica SC', 'Geo', 'Expletus Sans', 'Clicker Script', 'Cantora One', 'Poly', 'Delius Swash Caps', 'Cedarville Cursive', 'Frijole', 'Cinzel Decorative', 'UnifrakturMaguntia', 'Maiden Orange', 'Marcellus', 'Baumans', 'Chelsea Market', 'Wendy One', 'Stardos Stencil', 'Nova Mono', 'Skranji', 'Simonetta', 'Grand Hotel', 'Oranienbaum', 'Vibur', 'Buenard', 'Dawning of a New Day', 'Redressed', 'IM Fell English SC', 'Bowlby One SC', 'Unna', 'Italianno', 'Finger Paint', 'Norican', 'Snippet', 'Prosto One', 'Monoton', 'Wallpoet', 'VT323', 'Port Lligat Slab', 'Arizonia', 'Press Start 2P', 'Delius Unicase', 'IM Fell Great Primer', 'Bowlby One', 'IM Fell French Canon', 'Mouse Memoirs', 'PT Mono', 'Mate SC', 'Rufina', 'Fenix', 'Buda', 'Meddon', 'Ruluko', 'Swanky and Moo Moo', 'Dorsa', 'Miltonian Tattoo', 'Sofia', 'Sniglet', 'Graduate', 'Poller One', 'Amarante', 'Oleo Script Swash Caps', 'Numans', 'Vast Shadow', 'Qwigley', 'Rammetto One', 'IM Fell Great Primer SC', 'Quintessential', 'Amethysta', 'Mr De Haviland', 'Flamenco', 'IM Fell Double Pica', 'Junge', 'Sonsie One', 'Concert One', 'Cutive Mono', 'Fjord One', 'Londrina Solid', 'MedievalSharp', 'Inika', 'Ruslan Display', 'UnifrakturCook', 'Ledger', 'Jolly Lodger', 'Galdeano', 'Gabriela', 'Cagliostro', 'Trochut', 'Knewave', 'Artifika', 'Sofadi One', 'Mr Dafoe', 'Unica One', 'Gravitas One', 'Oxygen Mono', 'IM Fell French Canon SC', 'Petrona', 'Astloch', 'Mate', 'Linden Hill', 'Henny Penny', 'Mystery Quest', 'Revalia', 'Meie Script', 'Overlock SC', 'Dynalight', 'Shojumaru', 'Geostar Fill', 'Medula One', 'Irish Grover', 'Prociono', 'Bubblegum Sans', 'Bigshot One', 'Oldenburg', 'Creepster', 'Bilbo Swash Caps', 'League Script', 'Julee', 'Monofett', 'Alike Angular', 'Chango', 'Life Savers', 'Sail', 'Euphoria Script', 'Cambo', 'Nova Script', 'Della Respira', 'Balthazar', 'Freckle Face', 'Kenia', 'Nova Slim', 'Trade Winds', 'IM Fell Double Pica SC', 'Rouge Script', 'Engagement', 'Modern Antiqua', 'Jacques Francois', 'Bilbo', 'Smythe', 'Esteban', 'Offside', 'Ceviche One', 'Aladin', 'Nova Flat', 'Ranchers', 'Montaga', 'Rosarivo', 'Peralta', 'Condiment', 'Stint Ultra Condensed', 'Paprika', 'Seaweed Script', 'Stoke', 'Snowburst One', 'Nova Oval', 'Fondamento', 'Averia Libre', 'Lancelot', 'Port Lligat Sans', 'Iceberg', 'Geostar', 'Miniver', 'Asset', 'Cherry Swash', 'Pirata One', 'Habibi', 'Text Me One', 'Smokum', 'Gorditas', 'Milonga', 'Passero One', 'Goblin One', 'Atomic Age', 'Miltonian', 'Aubrey', 'Molle', 'Nova Cut', 'Raleway Dots', 'Federant', 'Supermercado One', 'Lovers Quarrel', 'Titan One', 'Rum Raisin', 'Averia Serif Libre', 'Aguafina Script', 'Chela One', 'Elsie Swash Caps', 'Share Tech Mono', 'Rye', 'Jacques Francois Shadow', 'Wellfleet', 'Trykker', 'Monsieur La Doulaise', 'Londrina Shadow', 'Krona One', 'Caesar Dressing', 'Seymour One', 'Fresca', 'Devonshire', 'Antic Didone', 'McLaren', 'Keania One', 'Joti One', 'Italiana', 'Ruthie', 'Asul', 'Germania One', 'Mrs Saint Delafield', 'Romanesco', 'Stint Ultra Expanded', 'Croissant One', 'Montserrat Subrayada', 'Piedra', 'Original Surfer', 'Nosifer', 'Galindo', 'Autour One', 'Eater', 'Eagle Lake', 'Spicy Rice', 'Glass Antiqua', 'Emblema One', 'Herr Von Muellerhoff', 'Risque', 'Ribeye Marrow', 'Londrina Outline', 'Sarina', 'Elsie', 'Stalemate', 'Bubbler One', 'Almendra', 'Marko One', 'Emilys Candy', 'Ewert', 'Sevillana', 'Mrs Sheppards', 'Combo', 'Diplomata', 'Ribeye', 'Butterfly Kids', 'Chicle', 'Felipa', 'Purple Purse', 'Londrina Sketch', 'Akronim', 'Bigelow Rules', 'Sirin Stencil', 'Princess Sofia', 'Dr Sugiyama', 'Vampiro One', 'Margarine', 'Faster One', 'Fascinate', 'Arbutus', 'Mr Bedfort', 'Macondo Swash Caps', 'Stalinist One', 'Jim Nightshade', 'Metal Mania', 'Averia Gruesa Libre', 'Miss Fajardose', 'Uncial Antiqua', 'Diplomata SC', 'New Rocker', 'Butcherman', 'Flavors', 'Macondo', 'Underdog', 'Unlock', 'Bonbon', 'Ruge Boogie', 'Almendra SC', 'Fruktur', 'Erica One', 'Fascinate Inline', 'Hanalei Fill', 'Plaster', 'Almendra Display', 'Hanalei', 'Warnes', 'Rubik Mono One'],
        'updater': function(item) {
            if (item === '') {
                $('#fontfamily').val('Arial');
            } else {
                $('#fontfamily').val('Custom');
            }
            return item;
        }
    });

    if (first_run) {
        defaultForm = $("#widget_form").serialize();
    }

    $("#show_only_my_articles").trigger('change');

    if ($('#cff').val() == '') {
        $('#fontfamily').val('Arial');
    }
});
</script>
<script src="<?php echo PLUGZ_JS_DIR ?>/jquery.alerts.js"
type="text/javascript"></script>

<div class="colorpicker" id="collorpicker_834">
<div class="colorpicker_color" style=
     "background-color: rgb(255, 0, 255);">
    <div>
        <div style="left: 0px; top: 150px;"></div>
    </div>
</div>

<div class="colorpicker_hue">
    <div style="top: 25px;"></div>
</div>

<div class="colorpicker_new_color" style=
     "background-color: rgb(0, 0, 0);"></div>

<div class="colorpicker_current_color" style=
     "background-color: rgb(0, 0, 0);"></div>

<div class="colorpicker_hex">
    <input maxlength="6" size="6" type="text" value="000000">
</div>

<div class="colorpicker_rgb_r colorpicker_field">
    <input maxlength="3" size="3" type="text" value="0">
</div>

<div class="colorpicker_rgb_g colorpicker_field">
    <input maxlength="3" size="3" type="text" value="0">
</div>

<div class="colorpicker_rgb_b colorpicker_field">
    <input maxlength="3" size="3" type="text" value="0">
</div>

<div class="colorpicker_hsb_h colorpicker_field">
    <input maxlength="3" size="3" type="text" value="300">
</div>

<div class="colorpicker_hsb_s colorpicker_field">
    <input maxlength="3" size="3" type="text" value="0">
</div>

<div class="colorpicker_hsb_b colorpicker_field">
    <input maxlength="3" size="3" type="text" value="0">
</div>

<div class="colorpicker_submit"></div>
</div>

<div class="colorpicker" id="collorpicker_830">
<div class="colorpicker_color" style=
     "background-color: rgb(255, 0, 255);">
    <div>
        <div style="left: 0px; top: 150px;"></div>
    </div>
</div>

<div class="colorpicker_hue">
    <div style="top: 25px;"></div>
</div>

<div class="colorpicker_new_color" style=
     "background-color: rgb(0, 0, 0);"></div>

<div class="colorpicker_current_color" style=
     "background-color: rgb(0, 0, 0);"></div>

<div class="colorpicker_hex">
    <input maxlength="6" size="6" type="text" value="000000">
</div>

<div class="colorpicker_rgb_r colorpicker_field">
    <input maxlength="3" size="3" type="text" value="0">
</div>

<div class="colorpicker_rgb_g colorpicker_field">
    <input maxlength="3" size="3" type="text" value="0">
</div>

<div class="colorpicker_rgb_b colorpicker_field">
    <input maxlength="3" size="3" type="text" value="0">
</div>

<div class="colorpicker_hsb_h colorpicker_field">
    <input maxlength="3" size="3" type="text" value="300">
</div>

<div class="colorpicker_hsb_s colorpicker_field">
    <input maxlength="3" size="3" type="text" value="0">
</div>

<div class="colorpicker_hsb_b colorpicker_field">
    <input maxlength="3" size="3" type="text" value="0">
</div>

<div class="colorpicker_submit"></div>
</div>

<div class="colorpicker" id="collorpicker_906">
<div class="colorpicker_color" style=
     "background-color: rgb(255, 0, 255);">
    <div>
        <div style="left: 0px; top: 150px;"></div>
    </div>
</div>

<div class="colorpicker_hue">
    <div style="top: 25px;"></div>
</div>

<div class="colorpicker_new_color" style=
     "background-color: rgb(0, 0, 0);"></div>

<div class="colorpicker_current_color" style=
     "background-color: rgb(0, 0, 0);"></div>

<div class="colorpicker_hex">
    <input maxlength="6" size="6" type="text" value="000000">
</div>

<div class="colorpicker_rgb_r colorpicker_field">
    <input maxlength="3" size="3" type="text" value="0">
</div>

<div class="colorpicker_rgb_g colorpicker_field">
    <input maxlength="3" size="3" type="text" value="0">
</div>

<div class="colorpicker_rgb_b colorpicker_field">
    <input maxlength="3" size="3" type="text" value="0">
</div>

<div class="colorpicker_hsb_h colorpicker_field">
    <input maxlength="3" size="3" type="text" value="300">
</div>

<div class="colorpicker_hsb_s colorpicker_field">
    <input maxlength="3" size="3" type="text" value="0">
</div>

<div class="colorpicker_hsb_b colorpicker_field">
    <input maxlength="3" size="3" type="text" value="0">
</div>

<div class="colorpicker_submit"></div>
</div>

<div class="colorpicker" id="collorpicker_197">
<div class="colorpicker_color" style=
     "background-color: rgb(255, 0, 255);">
    <div>
        <div style="left: 0px; top: 150px;"></div>
    </div>
</div>

<div class="colorpicker_hue">
    <div style="top: 25px;"></div>
</div>

<div class="colorpicker_new_color" style=
     "background-color: rgb(0, 0, 0);"></div>

<div class="colorpicker_current_color" style=
     "background-color: rgb(0, 0, 0);"></div>

<div class="colorpicker_hex">
    <input maxlength="6" size="6" type="text" value="000000">
</div>

<div class="colorpicker_rgb_r colorpicker_field">
    <input maxlength="3" size="3" type="text" value="0">
</div>

<div class="colorpicker_rgb_g colorpicker_field">
    <input maxlength="3" size="3" type="text" value="0">
</div>

<div class="colorpicker_rgb_b colorpicker_field">
    <input maxlength="3" size="3" type="text" value="0">
</div>

<div class="colorpicker_hsb_h colorpicker_field">
    <input maxlength="3" size="3" type="text" value="300">
</div>

<div class="colorpicker_hsb_s colorpicker_field">
    <input maxlength="3" size="3" type="text" value="0">
</div>

<div class="colorpicker_hsb_b colorpicker_field">
    <input maxlength="3" size="3" type="text" value="0">
</div>

<div class="colorpicker_submit"></div>
</div>

<div class="colorpicker" id="collorpicker_495">
<div class="colorpicker_color" style=
     "background-color: rgb(255, 0, 255);">
    <div>
        <div style="left: 0px; top: 150px;"></div>
    </div>
</div>

<div class="colorpicker_hue">
    <div style="top: 25px;"></div>
</div>

<div class="colorpicker_new_color" style=
     "background-color: rgb(0, 0, 0);"></div>

<div class="colorpicker_current_color" style=
     "background-color: rgb(0, 0, 0);"></div>

<div class="colorpicker_hex">
    <input maxlength="6" size="6" type="text" value="000000">
</div>

<div class="colorpicker_rgb_r colorpicker_field">
    <input maxlength="3" size="3" type="text" value="0">
</div>

<div class="colorpicker_rgb_g colorpicker_field">
    <input maxlength="3" size="3" type="text" value="0">
</div>

<div class="colorpicker_rgb_b colorpicker_field">
    <input maxlength="3" size="3" type="text" value="0">
</div>

<div class="colorpicker_hsb_h colorpicker_field">
    <input maxlength="3" size="3" type="text" value="300">
</div>

<div class="colorpicker_hsb_s colorpicker_field">
    <input maxlength="3" size="3" type="text" value="0">
</div>

<div class="colorpicker_hsb_b colorpicker_field">
    <input maxlength="3" size="3" type="text" value="0">
</div>

<div class="colorpicker_submit"></div>
</div>
<?php 
endif;

include_once(dirname(__FILE__).'/footer.php');
