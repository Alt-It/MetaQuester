@extends('layouts.staticPages')

@section('title', $title )

@section('content')
	<div class="modal fade" id="plugin-modal" tab-index="-1" role="dialog">
      <div class="modal-dialog ">
        <div class="content modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;
              </span>
            </button>
            <h4>
            </h4>
          </div>
          <div class="modal-body">
          </div>
        </div>
      </div>
    </div>
	 <h1 id="mglogo">
            <a class="hidden-xs" href="/">MetaGer
            </a>
          </h1>
          <figure>
            <fieldset id="foki">
              <input id="web" type="radio" name="focus" value="web" form="searchForm" checked required="">
              <label id="web-label" for="web">
                <span class="glyphicon glyphicon-globe">
                </span>
                <span class="content">Web
                </span>
              </label>
              <input id="bilder" type="radio" name="focus" value="bilder" form="searchForm" required="">
              <label id="bilder-label" for="bilder">
                <span class="glyphicon glyphicon-picture">
                </span>
                <span class="content">Bilder
                </span>
              </label>
              <input id="nachrichten" type="radio" name="focus" value="nachrichten" form="searchForm" required="">
              <label id="nachrichten-label" for="nachrichten">
                <span class="glyphicon glyphicon-bullhorn">
                </span>
                <span class="content">Nachrichten
                </span>
              </label>
              <input id="wissenschaft" type="radio" name="focus" value="wissenschaft" form="searchForm" required="">
              <label id="wissenschaft-label" for="wissenschaft">
                <span class="glyphicon glyphicon-file">
                </span>
                <span class="content">Wissenschaft
                </span>
              </label>
              <input id="produkte" type="radio" name="focus" value="produktsuche" form="searchForm" required="">
              <label id="produkte-label" for="produkte">
                <span class="glyphicon glyphicon-shopping-cart">
                </span>
                <span class="content">Produkte
                </span>
              </label>
              <input id="angepasst" type="radio" name="focus" value="angepasst" form="searchForm" required="">
              <label id="anpassen-label" for="angepasst">
                <span class="glyphicon glyphicon-cog">
                </span>
                <span class="content">
                  <a href="/settings/">anpassen
                  </a>
                </span>
              </label>
            </fieldset>
            <fieldset>
              <form id="searchForm" method="GET" action="/meta/meta.ger3" accept-charset="UTF-8">
                <div class="input-group">
                  <div class="input-group-addon">
                    <button type="button" data-toggle="popover" data-html="true" data-container="body" title="Pers&ouml;nliches Design ausw&auml;hlen" data-content='	&lt;ul id="color-chooser" class="list-inline list-unstyled"&gt;
&lt;li &gt;&lt;a id="standard" data-rgba="255,194,107,1" href="javascript:void(0)"&gt;&lt;/a&gt;&lt;/li&gt;
&lt;li &gt;&lt;a id="standardHard" data-rgba="255,128,0,1" href="javascript:void(0)"&gt;&lt;/a&gt;&lt;/li&gt;
&lt;li &gt;&lt;a id="blue" data-rgba="164,192,230,1" href="javascript:void(0)"&gt;&lt;/a&gt;&lt;/li&gt;
&lt;li &gt;&lt;a id="blueHard" data-rgba="2,93,140,1" href="javascript:void(0)"&gt;&lt;/a&gt;&lt;/li&gt;
&lt;li &gt;&lt;a id="green" data-rgba="177,226,163,1" href="javascript:void(0)"&gt;&lt;/a&gt;&lt;/li&gt;
&lt;li &gt;&lt;a id="greenHard" data-rgba="127,175,27,1" href="javascript:void(0)"&gt;&lt;/a&gt;&lt;/li&gt;
&lt;li &gt;&lt;a id="red" data-rgba="255,92,92,1" href="javascript:void(0)"&gt;&lt;/a&gt;&lt;/li&gt;
&lt;li &gt;&lt;a id="redHard" data-rgba="255,0,0,1" href="javascript:void(0)"&gt;&lt;/a&gt;&lt;/li&gt;
&lt;li &gt;&lt;a id="pink" data-rgba="255,196,246,1" href="javascript:void(0)"&gt;&lt;/a&gt;&lt;/li&gt;
&lt;li &gt;&lt;a id="pinkHard" data-rgba="254,67,101,1" href="javascript:void(0)"&gt;&lt;/a&gt;&lt;/li&gt;
&lt;li &gt;&lt;a id="black" data-rgba="238,238,238,1" href="javascript:void(0)"&gt;&lt;/a&gt;&lt;/li&gt;
&lt;li &gt;&lt;a id="blackHard" data-rgba="50,50,50,1" href="javascript:void(0)"&gt;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;'>
                      <span class="glyphicon glyphicon-tint">
                      </span>
                    </button>
                  </div>
                  <input type="text" name="eingabe" required="" autofocus="" class="form-control" placeholder="MetaGer: Sicher suchen &amp; finden, Privatsph&auml;re sch&uuml;tzen">
                  <input type="hidden" name="encoding" value="utf8">
                  <input type="hidden" name="lang" value="all">
                  <div class="input-group-addon">
                    <button type="submit">
                      <span class="glyphicon glyphicon-search">
                      </span>
                    </button>
                  </div>
                </div>
              </form>
            </fieldset>
            <ul class="list-inline">
              <li>
                <a href="https://www.boost-project.com/de/shops?charity_id=1129&amp;tag=bl" target="_blank" id="foerdershops">Einkaufen bei MetaGer-F&ouml;rdershops
                </a>
              </li>
              <li class="hidden-xs seperator">|
              </li>
              <li id="plug">
                <a href="#" id="plugin" data-toggle="modal" data-target="#plugin-modal">MetaGer-Plugin hinzuf&uuml;gen
                </a>
              </li>
            </ul>
          </figure>
        
@endsection

@section('optionalContent')
<section id="moreInformation" class="hidden-xs">
          <h1 class="hidden">Weitere Informationen
          </h1>
          <div class="row">
            <div id="sponsors" class="col-md-6 col-sm12">
              <h2>Sponsoren
              </h2>
              <ul>
                <li>
                  <a href="http://www.woxikon.de/" class="mutelink" target="_blank">Woxikon: Nach W&ouml;rtern &amp; Synonymen suchen
                  </a>
                </li>
                <li>
                  <a href="http://www.gutschein-magazin.de/" class="mutelink" target="_blank">Aktuelle Gutscheine auf Gutschein-Magazin.de
                  </a>
                </li>
                <li>
                  <a href="https://www.finanzcheck.de/" class="mutelink" target="_blank">G&uuml;nstige Kredite auf FINANZCHECK.de vergleichen
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-6 col-sm-12">
              <h2>
                <a href="/about/">&Uuml;ber uns
                </a>
              </h2>
              <ul>
                <li>
                  <a href="/datenschutz/">Datenschutz &amp; Privatsph&auml;re
                  </a> sind bei uns einfach &amp; selbstverst&auml;ndlich.
                </li>
                <li>Wir arbeiten nicht gewinnorientiert, wir sind ein 
                  <a href="/spende/">gemeinn&uuml;tziger Verein.
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </section>
@endsection