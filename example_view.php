<style>
section{padding: .5em 1em 2em 1em}
section:first-of-type{padding: 0}
</style>
<section>
    <h2>Example Module</h2>
    <p>A basic example of an EmonCMS module with sidebar.</p>
    <p>EmonCMS the uses the <a href="https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller"><strong>MVC</strong> pattern</a>. The EmonCMS web requests are handled by the <strong>C</strong>ontroller which calls on <strong>M</strong>odels to output content as <strong>V</strong>iews</p>
</section>

<section>
    <blockquote class="mb-0">
    <h4>Every module uses these naming patterns:</h4>
    <ul class="mb-0" style="list-style-type: disclosure-closed">
        <li><span class="text-light">/Modules/example/</span>example_schema.php - database structure</li>
        <li><span class="text-light">/Modules/example/</span>example_menu.php - menu / sidebar</li>
        <li><span class="text-light">/Modules/example/</span>example_controller.php - controller / web request handler</li>
        <li><span class="text-light">/Modules/example/</span>example_model.php - collection of related functions</li>
        <li><span class="text-light">/Modules/example/</span>locale/[lang]/LC_MESSAGES - translations</li>
        <li><span class="text-light">/Modules/example/</span>example_list_view.php - view(s) (loaded by controller)</li>
    </ul>
    </blockquote>
</section>


<section class="bg-light">
    <h4>Javascript content using <code>gettext</code> translations:</h4>
    <div class="d-flex">
        <ul class="nav nav-pills mb-0" id="translations"></ul>
    </div>
</section>

<section>
    <h4>Example view content:</h4>
    <p>This is a sample paragraph ...</p>

    <div class="row-fluid">
        <div class="span3">
            <a href="#myModal" data-toggle="modal"><img src="<?php echo $path ?>Modules/example/example.png"></a>
        </div>
        <div class="span9">
            <table class="table table-condensed table-striped">
                <tr><th>Column A</th><th>Column B</th><th>Column C</th></tr>
                <tr><td>Row 1A</td><td>Row 1B</td><td>Row 1C</td></tr>
                <tr><td>Row 2A</td><td>Row 2B</td><td>Row 2C</td></tr>
                <tr><td>Row 3A</td><td>Row 3B</td><td>Row 3C</td></tr>
            </table>
        </div>
    </div>
</section>

<section class="bg-light">
    <h4>CSS layout</h4>
    <p><a href="https://getbootstrap.com/2.3.2/">Bootstrap v2.3</a> is used. Example of the boostrap media element:</p>
    <div class="media">
        <a class="pull-left" href="#">
            <img class="media-object" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAYAAADDPmHLAAAEZklEQVR4nO2Za1OyXBSGn///UzhGpqYZY6ll5cgMahiMOgmREvgX1vspRg7lYd4SWveH64v7MNyLC9h7+2+z2RDgy79TXwCAAAACAAgAIACAAAACAAgAIACAAAACAAgAIACAAAACAAgAIACAAAACAAgAIACAAAACAAgAIACAAAACAAgAIACAAAACAAgAIACAAAACAAgAIACAAAACAAgAIACAAAACAAjAHAjAHAjAHAjAHAjAHAjAHAjAHAjAnF8XIAgCMgyDWq0WaZpGkiSRqqpUrVap3W6TaZq0Xq/3mms2m5EgCBl830eGIgpg2zadnZ3lBt7GcZy9bkKlUvn14v2FDCcRwLIsEkVxZ+H2LV6v1/ty/E8V7y9kOIkAvu+TLMuJgPV6nZ6fn8nzPPJ9n+bzOZmmSa1Wi2az2bfzOY4TzyNJ0q8U7y9kOJkAadNrtRqFYXjUXOv1mjRNi+cyDGNn8XzfJ0VREn0mk0miz8fHB11cXCT6PDw8FCZDaQUIwzDz5CwWi7g9iqKD5ut2u/E83W6XXNfdq3iTySTRR1VVWq1WcXu/3//yBhclQykFWCwWiWCyLJNt26TrelxURVHo+vqaptPpt3PZth3Po2kaBUFwUPHa7Xai383NTXyN2992SZJouVwWMkPpBBiNRolguxZRnU4n94kKgiDx2vxcZB1SvPSrVxAEmk6nVK1WE78ZhlHYDKUTYDgcflusPAaDQWae29vbuP3u7i7+/dDibT+BeTez2Wxmbl7RMpRKgMFgkAknyzJZlhW//hqNRqY9CIJ4jpeXl7itUqkk2o4p3lfbL1mWc8cWMUNpBMhb4d7f3yf6vL6+Zvps76O3D0vm83li7DHFC4KAzs/PM+NGo1FpMpRGAMuyMuHSW7AoijKv4vF4HLerqnrwK1gQBOr1ernX5Lpu7t670+mUJkNpBPA876jiWZb1I8ULw5Dq9fqXY/JW8UXLUCoBNptNZpXd7/cT7cvlMhPcdd0fKd7j42OiT/pToKoqvb+/FzpD6QRIb6MURSHHcSiKIvJ9n5rNZqK9Vqslxo/HYzJNM5e8BdpwOCTTNDPf2vR+X5Zl8jwvcz6g63phM5RSgCiKMgUShPz9tCiKO8/Rt9l3AZX3z9vnfn+1WmX+4UsvCIuQobQCfN6Aq6urb193iqLsPEk7tnjbx6+CIFCj0Ujs99MLPUVR6O3trVAZSi3AdqF1XSdN00gURVIUhS4vL+np6Sn32/t/FC99+JM+6v0k/SlIS3LKDH9GAFAsIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABzIABz/gPMshX9w7oFAgAAAABJRU5ErkJggg==">
        </a>
        <div class="media-body">
            <h4 class="media-heading">Media heading</h4>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
        </div>
    </div>
</section>

<section>
    <h4>Example of the Example module's <code>example_model.php->version()</code> function output passed to view template:</h4>
    <code><?php echo $module_version ?></code>
</section>

<section class="bg-primary text-white">
    <h4>Translations</h4>
    <p>EmonCMS is multilingual. You can change your preferred language in the <a href="<?php echo $path ?>user/view" title="EmonCMS..." class="text-dark">My Account</a> page</p>
    <p>Use the <a class="text-dark" title="php.net..." href="https://www.php.net/manual/en/book.gettext.php">php gettext</a> functions to create translatable text 'placeholders' <code>_('Example')</code> for the <abbr title="Suggested: https://poedit.net/">gettext software</abbr> to find. </p>
    <p>See <code>/Modules/example/Locale/fr_FR/LC_MESSAGES/messages.po</code> for a list of <a class="text-dark" href="https://www.php.net/manual/en/book.gettext.php" title="php.net...">php gettext</a> translations used in this demo.</p>
    <p>Currently this view is using the locale: <small class="label label-inverse"><?php echo $locale ?></small> for translations.</p>
</section>





<!-- Modals -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Modal Overlay</h3>
    </div>
    <div class="modal-body">
        <p><img src="<?php echo $path ?>Modules/example/example.png"></p>
    </div>
    <div class="modal-footer">
        <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true"><?php echo _('Close') ?></button>
    </div>
</div>




<script>
function getTranslations(){
    return <?php echo !empty($translations) ? json_encode($translations): '{}' ?>;
}

$(function(){
    var items = [_('Menu Item 1'),_('Menu Item 2'),_('Menu Item 3')]
    var listItems = []
    for (n in items) {
        listItems.push(items[n])
    }
    var output = ''
    for (n in listItems) {
        let url = path + 'example/view/' + (parseInt(n) + 1)
        let active = url === window.location.href ? ' class="active"' : ''
        output += '<li' + active + '>'
        output += '  <a href="' + url + '">' + listItems[n] + '</a>'
        output += '</li>'
    }
    $('#translations').html(output)
    $(document).on('click', '#translations li a', function(event) {
        var link = $(event.currentTarget)
        link.parent().addClass('active').siblings().removeClass('active')
        event.preventDefault()
    })
})
</script>