<div class="inner-page">
    
    
  
    
    <div class="inner-page-content" ng-show="!add_new" ng-cloak>
    
        <md-list ng-show="nav.state.length==2">
            
            <md-list-item class="animate-repeat" ng-repeat="school in schools|filter:actions.search_query as results track by $index" ng-include data-src="'/getView/template.single_school'" ></md-list-item>
    
            <md-list-item ng-if="!results.length" class="animate-if" data-ng-include data-src="'/getView/template.not_found'" ng-init="not_found='results'"></md-list-item>
        </md-list>
    </div>
    <ui-view></ui-view>
</div>