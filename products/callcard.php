<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		.container {
			  display: inline-block;
			  cursor: pointer;
			}

			.bar1, .bar2, .bar3 {
			  width: 35px;
			  height: 5px;
			  background-color: #333;
			  margin: 6px 0;
			  transition: 0.4s;
			}

			.change .bar1 {
			  transform: translate(0, 11px) rotate(-45deg);
			}

			.change .bar2 {opacity: 0;}

			.change .bar3 {
			  transform: translate(0, -11px) rotate(45deg);}
			.action-tools {
			  text-align: center;
			  vertical-align: top;
			  margin: 0;
			  display: flex;
			}
			.list-inline {
			  padding-left: 0;
			  list-style: none;}
			</style>
</head>
<body>
	<nav class="top-nav">
		<div class="container" onclick="myFunction(this)">
		  <div class="bar1"></div>
		  <div class="bar2"></div>
		  <div class="bar3"></div>
		</div>
		<div class="home">
			<a href="#">a</a>
			<ul class="action-tools list-inline" ng-if="(topPanelTools | filter:{position:'left'}).length !== 0" ng-init="panelTools = (topPanelTools | filter:{position:'left'}); isIpadMenu=false; isMobileMenu=false;" ng-include="" src="'topPanelTemplate'">
    <li class="list-inline-item mr-0" ng-repeat="topPanelTool in panelTools | orderBy : 'sortOrder'" ng-if="(topPanelTool.visibility | lowercase) !== 'hide'" ng-switch="" on="topPanelTool.toolType" ng-class="(isIpadMenu || isMobileMenu) ? ((isMobileMenu) ? topPanelTool.toolClassMobile: topPanelTool.toolClassIpad) : topPanelTool.toolClass">

        <div ng-switch-when="logo" class="d-none d-xl-block">
            <a ng-if="appConfiguration.logo !== undefined &amp;&amp; appConfiguration.logo !== ''" class="navbar-brand" href="https://www.milkpress.com.ph/"><img class="img-fluid" ng-src="https://degqkf7c4iqz7.cloudfront.net/milkpress/images/websitelogos/retailer_studio_small_logo840.png" src="https://degqkf7c4iqz7.cloudfront.net/milkpress/images/websitelogos/retailer_studio_small_logo840.png"></a>
        </div>
    </li><li class="list-inline-item mr-0" ng-repeat="topPanelTool in panelTools | orderBy : 'sortOrder'" ng-if="(topPanelTool.visibility | lowercase) !== 'hide'" ng-switch="" on="topPanelTool.toolType" ng-class="(isIpadMenu || isMobileMenu) ? ((isMobileMenu) ? topPanelTool.toolClassMobile: topPanelTool.toolClassIpad) : topPanelTool.toolClass">

        

        <div ng-switch-when="productDetails">
            <div class="product-name-size mt-2 mt-md-0 mb-1 mb-md-0">
                <p class="text-ellipsis text-nowrap overflow-hidden text-left" ng-if="appConfiguration.product.type !== 'package'">
                    <label class="font-md" title="Notecards (Both Sides)">Notecards (Both Sides)</label>
                </p>
                <form class="form-inline d-none d-md-block ng-valid ng-dirty ng-valid-parse" ng-switch="" on="appConfiguration.config.restrictSize" style="">
                   <div class="form-group w-100" ng-switch-when="false">
                        <div class="ui-select-container selectize-control single ng-valid ng-not-empty ng-touched ng-dirty ng-valid-parse open" ng-class="{'open': $select.open}" ng-model="appConfiguration.data.selectedSize" theme="selectize" skip-focusser="true" on-select="topPanelTool.onChange()" title="Select Size" ng-if="appConfiguration.product.customSize.enabled !== true &amp;&amp; appConfiguration.product.type !== 'package'" style=""><div class="selectize-input focus" ng-class="{'focus': $select.open, 'disabled': $select.disabled, 'selectize-focus' : $select.focus}" ng-click="$select.open &amp;&amp; !$select.searchEnabled ? $select.toggle($event) : $select.activate()" style=""><div ng-hide="$select.searchEnabled &amp;&amp; ($select.open || $select.isEmpty())" class="ui-select-match ng-hide" placeholder="Select Size" style=""><span ng-show="!$select.searchEnabled &amp;&amp; ($select.isEmpty() || $select.open)" class="ui-select-placeholder text-muted ng-hide">Select Size</span> <span ng-hide="$select.isEmpty() || $select.open" ng-transclude="" class="ng-hide" style="">4 x 6 inches</span></div><input type="search" autocomplete="off" tabindex="-1" class="ui-select-search ui-select-toggle ng-pristine ng-valid ng-empty ng-touched" ng-class="{'ui-select-search-hidden':!$select.searchEnabled}" ng-click="$select.toggle($event)" placeholder="Select Size" ng-model="$select.search" ng-hide="!$select.isEmpty() &amp;&amp; !$select.open" ng-disabled="$select.disabled" aria-label="Select Size" style="width: 153px;"></div><div ng-show="$select.open" class="ui-select-choices ui-select-dropdown selectize-dropdown single" ng-class="{'single': !$select.multiple, 'multi': $select.multiple}" repeat="size in appConfiguration.product.sizes | filter: {title: $select.search}" style="opacity: 1;"><div class="ui-select-choices-content selectize-dropdown-content"><div class="ui-select-choices-group optgroup"><div ng-show="$select.isGrouped" class="ui-select-choices-group-label optgroup-header ng-hide" ng-bind="$group.name"></div><!----><!----><div role="option" class="ui-select-choices-row" ng-class="{active: $select.isActive(this), disabled: $select.isDisabled(this)}" ng-repeat="size in $select.items" ng-if="$select.open" ng-click="$select.select(size,$select.skipFocusser,$event)" style=""><div class="option ui-select-choices-row-inner" data-selectable="" uis-transclude-append="">
                                <div ng-bind-html="size.title | highlight: $select.search">3.35 x 2.16 inches</div>
                            </div></div><!----><!----><!----><div role="option" class="ui-select-choices-row active" ng-class="{active: $select.isActive(this), disabled: $select.isDisabled(this)}" ng-repeat="size in $select.items" ng-if="$select.open" ng-click="$select.select(size,$select.skipFocusser,$event)" style=""><div class="option ui-select-choices-row-inner" data-selectable="" uis-transclude-append="">
                                <div ng-bind-html="size.title | highlight: $select.search">4 x 6 inches</div>
                            </div></div><!----><!----></div></div></div><div class="ui-select-no-choice selectize-dropdown ng-hide" ng-show="$select.items.length == 0"><div class="selectize-dropdown-content"><div data-selectable="" ng-transclude="">We couldn't find any choices.</div></div></div><ui-select-single></ui-select-single><input ng-disabled="$select.disabled" class="ui-select-focusser ui-select-offscreen" type="text" id="focusser-0" aria-label="Select Size focus" aria-haspopup="true" role="button" disabled=""></div> 
                    </div>
                </form>
            </div>
        </div>


    </li>
</ul>
		</div>
		
	</nav>

</body>
</html>
<script>
function myFunction(x) {
  x.classList.toggle("change");
}


</script>