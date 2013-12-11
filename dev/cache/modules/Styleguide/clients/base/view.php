<?php
$clientCache['Styleguide']['base']['view'] = array (
  'styleguide' => 
  array (
    'meta' => 
    array (
      'template_values' => 
      array (
        'last_updated' => '2013-05-06T22:47:00+00:00',
        'version' => '7.0.1',
      ),
    ),
    'controller' => 
    array (
      'base' => '/*********************************************************************************
     * By installing or using this file, you are confirming on behalf of the entity
     * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
     * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
     * http://www.sugarcrm.com/master-subscription-agreement
     *
     * If Company is not bound by the MSA, then by installing or using this file
     * you are agreeing unconditionally that Company will be bound by the MSA and
     * certifying that you have authority to bind Company accordingly.
     *
     * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
     ********************************************************************************/
({className:\'container-fluid\',_render:function(){var self=this;app.view.View.prototype._render.call(this);}})',
    ),
    'templates' => 
    array (
      'styleguide' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}

<div class="page-header">
    <h1>Documentation <small>A guide to developing in Sugar7.</small></h1>
</div>

<section>
    <ul class="sg-main listed">
        <li><i class="icon-book icon-3x"></i><a href="#Styleguide/docs/index">Core Elements</a></li>
        <li><i class="icon-columns icon-3x"></i><a href="#Styleguide/layout/records">Default Module Layout</a></li>
        <li><i class="icon-reorder icon-3x"></i><a href="#Styleguide/layout/list">Default List View</a></li>
        {{! <li><i class="icon-list-alt icon-3x"></i><a href="#Styleguide/layout/record">Default Record Detail View</a></li> }}
        {{! <li><i class="icon-list-alt icon-3x"></i><a href="#Styleguide/layout/record-card2">Default Record Detail View (labels on left)</a></li> }}
        <li><i class="icon-plus icon-3x"></i><a href="#Styleguide/create">Default Record Create View</a></li>
        <li><i class="icon-list-alt icon-3x"></i><a href="#Styleguide/field/all">Example Sugar7 Fields</a></li>
        {{! <li><i class="icon-heart icon-3x"></i><a href="styleguide/tests/global.html">Styleguide Tests</a></li> }}
        <li><i class="icon-edit icon-3x"></i><a href="#Styleguide/docs/base_edit">Updating Documentation</a></li>
    </ul>
</section>
',
    ),
  ),
  'content' => 
  array (
    'templates' => 
    array (
      'charts_vertical' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
<section id="vertical-bar">
  <div class="page-header">
    <h2>Vertical Bar <small>used for comparing multiple series with a few values</small></h2>
  </div>
  <div class="row-fluid">
    <div class="span6">
      <h3>Standard Vertical Bar Chart</h3>
      <p>Long description. [<a href="styleguide/content/charts/multiBarChart.html" target="_blank">Full Screen</a> | <a href="styleguide/content/charts/multiBarChart_colors.html" target="_blank">Color Options</a> ]</p></p>
      <div>
<div id="vert1" class="nv-chart">
<svg></svg>
</div>
      </div>
    </div>
    <div class="span6">
      <h3>Pareto Chart</h3>
      <p>This is a new NVD3 chart type created for SugarCRM. An example of usage in the Sugar7 prototype is on <a href="../styleguide/sugar7/forecast_nvd3.html" target="_blank">forecasting page</a>. [<a href="styleguide/content/charts/paretoChart.html" target="_blank">Full Screen</a>]</p>
      <div>
<div id="vert2" class="nv-chart view-forecastsChart">
<svg></svg>
</div>
      </div>
    </div>
  </div>
</section>

<script src="styleguide/content/charts/data/pareto_data.js"></script>
<script src="styleguide/content/charts/data/multibar_data.js"></script>

<script>
  //Vertical Bar Chart with Line
  nv.addGraph({
    generate: function() {
        //var chart = nv.models.multiBarChart();
        //override default barClick function
        var chart = nv.models.paretoChart()
              .margin({top: 10, right: 10, bottom: 30, left: 40})
              .showControls(false)
              .showTitle(false)
              .stacked(false)
              // .barClick( function(data,e,selection) {
              //     //if only one bar series is disabled
              //     d3.select(\'#vert2 svg\')
              //       .datum(forecast_data_Q1)
              //       .transition().duration(500).call(chart);
              //   })
              ;
        //end override

        d3.select(\'#vert2 svg\')
          .datum(this.translateDataToD3(forecast_data_Q1))
          .transition().duration(500).call(chart);

        return chart;
    },
    translateDataToD3 : function( json, params )
    {
        return {
            \'properties\':{
                \'title\': json.properties[0].title
              , \'quota\': parseInt(json.values[0].goalmarkervalue[0],10)
              // bar group data (x-axis)
              , \'groupData\': json.values.map( function(d,i){
                    return {
                      \'group\': i
                    , \'l\': json.values[i].label
                    , \'t\': json.values[i].values.reduce( function(p, c, i, a){
                        return parseInt(p,10) + parseInt(c,10);
                      })
                    }
                })
            }
            // series data
          , \'data\': json.label.map( function(d,i){
                return {
                    \'key\': d
                  , \'type\': \'bar\'
                  , \'series\': i
                  , \'values\': json.values.map( function(e,j){
                        return { \'series\': i, \'x\': j+1, \'y\': parseInt(e.values[i],10),  y0: 0 };
                    })
                  , \'valuesOrig\': json.values.map( function(e,j){
                        return { \'series\': i, \'x\': j+1, \'y\': parseInt(e.values[i],10),  y0: 0 };
                    })
                }
            }).concat(
                json.properties[0].goal_marker_label.filter( function(d,i){
                    return d !== \'Quota\';
                  }).map( function(d,i){
                    return {
                        \'key\': d
                      , \'type\': \'line\'
                      , \'series\': i
                      , \'values\': json.values.map( function(e,j){
                          return { \'series\': i, \'x\': j+1, \'y\': parseInt(e.goalmarkervalue[i+1],10) };
                        })
                      , \'valuesOrig\': json.values.map( function(e,j){
                          return { \'series\': i, \'x\': j+1, \'y\': parseInt(e.goalmarkervalue[i+1],10) };
                        })
                    }
                })
            )
        };
    },
    callback: function(graph) {
      $(\'#log\').text(\'Chart is loaded\');
    }
  });

  // Vertical Bar Chart without Line
  nv.addGraph(function() {

    var chart = nv.models.multiBarChart()
          .showTitle(false)
          .tooltips(true)
          .showControls(false)
          //.colorData( \'graduated\', {c1: \'#e8e2ca\', c2: \'#336699\', l: forecast_data_Q1.data.length} )
          //.colorData( \'class\' )
          .colorData( \'default\' )
          .tooltipContent( function(key, x, y, e, graph) {
              return \'<p>Stage: <b>\' + key + \'</b></p>\' +
                     \'<p>Amount: <b>$\' +  parseInt(y) + \'K</b></p>\' +
                     \'<p>Percent: <b>\' +  x + \'%</b></p>\'
              })
          //.forceY([0,400]).forceX([0,6]);
        ;

    d3.select(\'#vert1 svg\')
        .datum(multibar_data_default)
      .transition().duration(500)
        .call(chart);

    nv.utils.windowResize(chart.update);

    return chart;
  });
</script>
',
      'forms_layouts' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
<!-- Form layouts
================================================== -->
<section id="form-layouts">
  <div class="page-header">
    <h1>Form Layouts <small>custom layouts of field components</small></h1>
  </div>

  <h2 id="dFE3fA">Address</h2>

  <div class="row-fluid">
    <div class="span6 record-cell" data-type="fieldset" data-name="fieldset_address">
      <div class="record-label" data-name="">Billing Address</div>
      <span class="normal index8" data-fieldname="fieldset_address" data-index="8" data-tour="tour-Accounts-fieldset_address">
        <span sfuuid="412">
          <span sfuuid="413" class="address_street">
            <div class="ellipsis_inline" >
              111 Silicon Valley Road
            </div>
          </span>
          <span sfuuid="414" class="address_city">
            <div class="ellipsis_inline" >
              St. Petersburg
            </div>
          </span>
          <span sfuuid="415" class="address_state">
            <div class="ellipsis_inline" >
              CA
            </div>
          </span>
          <span sfuuid="416" class="address_zip">
            <div class="ellipsis_inline" >
              30373
            </div>
          </span>
          <span sfuuid="417" class="address_country">
            <div class="ellipsis_inline" >
              USA
            </div>
          </span>
        </span>
      </span>
      <span class="record-edit-link-wrapper" data-name="fieldset_address">
        <a class="record-edit-link btn btn-invisible" data-type="fieldset" data-name="fieldset_address"><i class="icon-pencil"></i></a>
      </span>
    </div>
  </div>

  <hr>
  <h2>Input fields inheriting width of the parent container</h2>

  <form class="form-horizontal clearfix">
    <fieldset class="card2 span6">

      <div class="row-fluid control-group">
        <div class="control-label span3">
          <label for="input01">Field:</label>
        </div>
        <div class="controls span9 controls-four btn-fit">
          <input type="text" id="input01" class="inherit-width">
          <a href="" class="btn fourth" rel="tooltip" title="Primary"><i class="icon-star"></i></a>
          <a href="" class="btn third" rel="tooltip" title="Add another"><i class="icon-plus"></i></a>
          <a href="" class="btn second" rel="tooltip" title="Primary"><i class="icon-minus"></i></a>
          <a href="" class="btn first" rel="tooltip" title="Add another"><i class="icon-star"></i></a>
        </div>
      </div>

      <div class="row-fluid control-group">
        <div class="control-label span3">
          <label for="input01">Field:</label>
        </div>
        <div class="controls span9 controls-three btn-fit">
          <input type="text" id="input01" class="inherit-width">
          <a href="" class="btn third" rel="tooltip" title="Primary"><i class="icon-star"></i></a>
          <a href="" class="btn second" rel="tooltip" title="Add another"><i class="icon-plus"></i></a>
          <a href="" class="btn first" rel="tooltip" title="Primary"><i class="icon-star"></i></a>
        </div>
      </div>

      <div class="row-fluid control-group">
        <div class="control-label span3">
          <label for="input01">Field:</label>
        </div>
        <div class="controls span9 controls-two btn-fit">
          <input type="text" id="input01" class="inherit-width">
          <a href="" class="btn second" rel="tooltip" title="Primary"><i class="icon-star"></i></a>
          <a href="" class="btn first" rel="tooltip" title="Add another"><i class="icon-plus"></i></a>
        </div>
      </div>

      <div class="row-fluid control-group">
        <div class="control-label span3">
          <label for="input01">Field:</label>
        </div>
        <div class="controls span9 controls-one btn-fit">
          <input type="text" id="input01" class="inherit-width">
          <a href="" class="btn first" rel="tooltip" title="Primary"><i class="icon-star"></i></a>
        </div>
      </div>

      <div class="row-fluid control-group">
        <div class="control-label span3">
          <label for="input01">Field:</label>
        </div>
        <div class="controls span9">
          <input type="text" id="input01" class="inherit-width">
        </div>
      </div>

    </fieldset>
  </form>

  <form class="form-horizontal clearfix">
    <fieldset class="card2 span6">

      <div class="row-fluid control-group">
        <div class="control-label span3">
          <label for="input01">Field:</label>
        </div>
        <div class="controls span9 controls-four btn-group-fit">
          <input type="text" id="input01" class="inherit-width">
          <div class="btn-group">
            <a href="" class="btn" rel="tooltip" title="Primary"><i class="icon-star"></i></a>
            <a href="" class="btn" rel="tooltip" title="Add another"><i class="icon-plus"></i></a>
            <a href="" class="btn" rel="tooltip" title="Primary"><i class="icon-minus"></i></a>
            <a href="" class="btn" rel="tooltip" title="Add another"><i class="icon-star"></i></a>
          </div>
        </div>
      </div>

      <div class="row-fluid control-group">
        <div class="control-label span3">
          <label for="input01">Field:</label>
        </div>
        <div class="controls span9 controls-three btn-group-fit">
          <input type="text" id="input01" class="inherit-width">
          <div class="btn-group">
            <a href="" class="btn" rel="tooltip" title="Primary"><i class="icon-star"></i></a>
            <a href="" class="btn" rel="tooltip" title="Add another"><i class="icon-plus"></i></a>
            <a href="" class="btn" rel="tooltip" title="Primary"><i class="icon-star"></i></a>
          </div>
        </div>
      </div>

      <div class="row-fluid control-group">
        <div class="control-label span3">
          <label for="input01">Field:</label>
        </div>
        <div class="controls span9 controls-two btn-group-fit">
          <input type="text" id="input01" class="inherit-width">
          <div class="btn-group">
            <a href="" class="btn" rel="tooltip" title="Primary"><i class="icon-star"></i></a>
            <a href="" class="btn" rel="tooltip" title="Add another"><i class="icon-plus"></i></a>
          </div>
        </div>
      </div>

    </fieldset>
  </form>

  <hr>
  <h2>Card fields</h2>

  <div class="record row-fluid panel_body">
    <div class="span6 record-cell" data-type="type" data-name="name">
      <div class="record-label">Label</div>
      <span class="normal index5" >
        <span sfuuid="123451">
          <input type="text" name="name" value="111-222-3333" class="input-large">
          <p class="help-block"></p>
        </span>
      </span>
    </div>

    <div class="span6 record-cell error" data-type="type" data-name="name">
      <div class="record-label">Label</div>
      <span class="normal index5" >
        <span sfuuid="123451">
            <div class="input-append error">
                <input type="text" name="name" value="111-222-3333" class="input-large">
                <span class="error-tooltip  add-on local" rel="tooltip" data-original-title="Error: This field is required"><i class="icon-exclamation-sign"></i></span>
            </div>
        </span>
      </span>
    </div>
  </div>

  <hr>
  <h2>Card 2</h2>

  <form class="form-horizontal padded">
    <fieldset class="card2">
      <div class="row-fluid control-group">
        <div class="control-label span2">
          <label for="input01">Name:</label>
        </div>
        <div class="controls span10">
          <input type="text" id="input01" class="inherit-width">
        </div>
      </div>
      <div class="row-fluid control-group">
        <div class="span2 control-label">
          <label for="select01">Sales Stage:</label>
        </div>
        <div class="controls span10">
          <select id="select01" data-placeholder="Choose a Lead..." class="select2 inherit-width">
            <option value="pk" selected="selected">Proposal</option>
            <option value="pk">Closed Won</option>
            <option value="pk">Closed Lost</option>
          </select>
        </div>
      </div>
      <div class="row-fluid control-group">
        <div class="span2 control-label">
          <label for="select02">Account:</label>
        </div>
        <div class="controls span4">
          <select id="select02" data-placeholder="Choose a Lead..." class="select2 inherit-width">
            <option value="pk" selected="selected">Perkin Kleiners</option>
            <option value="pk">Underwater Mining Inc.</option>
            <option value="pk">Weyland</option>
          </select>
        </div>
      </div>
      <div class="row-fluid control-group">
        <div class="span2 control-label">
          <label for="input03">Amount:</label>
        </div>
        <div class="controls span4">
          <input type="text" id="input01" class="inherit-width">
        </div>
      </div>
    </fieldset>
  </form>

  <hr>

  <div class="modal hide in" style="display: block;position: relative;top: 0;left: 0;margin: 0; ">
    <div class="modal-header">
      <a class="close" data-dismiss="modal"><i class="icon-remove"></i></a>
      <h3>Create Note or Add Attachment</h3>
    </div>
    <div class="modal-body">
      <div class="modal-content">
        <form class="form-horizontal" enctype="multipart/form-data" method="POST">
          <!-- Fix for styleguide -->
          <fieldset style="width: 100%">
            <div class="row-fluid control-group">
              <label class="span2">Subject</label>
              <div class="span10">
                <span sfuuid="311">
                  <input type="text" name="name" value="" class="input-large">
                  <p class="help-block"></p>
                </span>
              </div>
            </div>

            <div class="row-fluid control-group error">
              <label class="span2">Subject</label>
              <div class="span10">
                <div class="input-append">
                  <span sfuuid="311">
                      <div class="input-append error">
                          <input type="text" name="name" value="" class="input-large">
                          <span class="error-tooltip  add-on local" rel="tooltip" data-original-title="Error: This field is required"><i class="icon-exclamation-sign"></i></span>
                      </div>
                  </span>
                </div>
              </div>
            </div>
            <hr>

            <div class="row-fluid control-group">
              <label class="span2">Note</label>
              <div class="span10">
                <span sfuuid="312">
                  <textarea rows="5" cols="90" name="description" class="input-xlarge wide tleft"></textarea>
                  <p class="help-block"></p>
                </span>
              </div>
            </div>

            <div class="row-fluid control-group error">
              <label class="span2">Note</label>
              <div class="span10">
                <div class="input-append textarea">
                  <span sfuuid="312">
                      <div class="input-append error">
                          <textarea rows="5" cols="90" name="description" class="input-xlarge wide tleft"></textarea>
                          <span class="error-tooltip  add-on local" rel="tooltip" data-original-title="Error: This field is required"><i class="icon-exclamation-sign"></i></span>
                      </div>
                  </span>
                </div>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
      <div class="modal-footer">
          <span sfuuid="314"><a class="btn btn-invisible btn-link" href="javascript:void(0)" name="cancel_button">Cancel</a></span>
          <span sfuuid="315"><a class="btn btn-primary" href="javascript:void(0)" name="save_button">Save</a></span>
      </div>
    </div>
  </div>

</section>

<!-- dynamic generation -->
<div class="modal hide" id="noteModal">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">×</a>
    <h3>Add a Note</h3>
  </div>
  <div class="modal-body">
    <div class="modal-content">
    <form class="form-horizontal">
      <fieldset>
        <div class="control-group">
          <label for="input01" class="control-label">Subject:</label>
          <div class="controls">
            <input type="text" id="input01" class="input-xlarge">
          </div>
        </div>
        <div class="control-group">
          <label for="select01" class="control-label">Note:</label>
          <div class="controls">
            <textarea class="input-xlarge"></textarea>
          </div>
        </div>
        <div class="control-group">
          <label for="select01" class="control-label">Attachement:</label>
          <div class="controls">
            <input type="file">
          </div>
        </div>
        <div class="hide">
          <div class="control-group">
            <label for="select01" class="control-label">Contact:</label>
            <div class="controls">
              <select data-placeholder="Choose a user..." class="select2" tabindex="2">
                <option value="pk"></option>
                <option value="pk">Administrator</option>
                <option value="pk">Majed Itani</option>
                <option value="pk">Uriah Welcome</option>
              </select>
            </div>
          </div>
          <div class="control-group">
            <label for="select01" class="control-label">Related to:</label>
            <div class="controls">
              <select data-placeholder="Choose a account..." class="select2" tabindex="2">
                <option value="pk" selected="selected">Account</option>
                <option value="pk">Contact</option>
                <option value="pk">Opportunity</option>
              </select>
              <select data-placeholder="Choose a account..." class="select2" tabindex="2">
                <option value="pk" selected="selected">Perkin Kleiners</option>
                <option value="pk">Underwater Mining Inc.</option>
                <option value="pk">Weyland</option>
              </select>
            </div>
          </div>
          <div class="control-group">
            <label for="select01" class="control-label">Assigned to:</label>
            <div class="controls">
              <select data-placeholder="Choose a user..." class="select2" tabindex="2">
                <option value="pk"></option>
                <option value="pk">Administrator</option>
                <option value="pk">Majed Itani</option>
                <option value="pk">Uriah Welcome</option>
              </select>
            </div>
          </div>
          <div class="control-group">
            <label for="select01" class="control-label">Teams:</label>
            <div class="controls">
              <select data-placeholder="Choose a account..." class="select2" tabindex="2" multiple>
                <option value="pk">Global</option>
                <option value="pk" selected="selected">East</option>
                <option value="pk">West</option>
                <option value="pk">North</option>
                <option value="pk">South</option>
              </select>
            </div>
          </div>
        </div>
      </fieldset>
    </form>
    </div>
    <div class="modal-footer">
      <button class="btn cancel" data-dismiss="modal">Cancel</button>
      <a href="index.html" data-loading-text="Saving..." class="btn loading btn-primary">
        Save
      </a>
    </div>
  </div>
</div>

<script>
  $("select.select2").each(function(){
    var $this = $(this)
      , ctor = getSelect2Constructor($this);
    $this.select2( ctor );
  });

  $("table td [rel=tooltip]").tooltip({
    container:\'body\',
    placement:\'top\',
    html:\'true\'
  });

  $(\'.error input, .error textarea\').on(\'focus\', function(){
      $(this).next().tooltip(\'show\');
  });

  $(\'.error input, .error textarea\').on(\'blur\', function(){
      $(this).next().tooltip(\'hide\');
  });

  $(\'.add-on\')
      .tooltip(\'destroy\')  // I cannot find where _this_ tooltip gets initialised with \'hover\', so i detroy it first, -f1vlad
      .tooltip({
          trigger: \'click\',
          container: \'body\'
  });
</script>
',
      'charts_circular' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
<section id="circular">
  <div class="page-header">
    <h2>Circular Charts <small>used for comparing parts to a whole</small></h2>
  </div>
  <div class="row-fluid">
    <div class="span6">
      <h3>Pie Chart</h3>
      <p>Example pie chart. [<a href="styleguide/content/charts/pieChart.html" target="_blank">Full Screen</a> | <a href="styleguide/content/charts/pieChart_colors.html" target="_blank">Color Options</a>]</p>
      <div>
<div id="pie" class="nv-chart">
<svg></svg>
</div>
      </div>
    </div>
    <div class="span6">
      <h3>Donut Chart</h3>
      <p>Example donut chart.</p>
      <div>
<div id="donut" class="nv-chart">
<svg></svg>
</div>
      </div>
    </div>
  </div>
</section>

<script src="styleguide/content/charts/data/pie_data.js"></script>

<script>
  // Pie Chart
  nv.addGraph(function() {
    var chart = nv.models.pieChart()
          .x(function(d) { return d.key })
          .y(function(d) { return d.value })
          .showLabels(true)
          .showTitle(false)
          //.color(d3.scale.category10().range())
          //.colorData( \'graduated\', {c1: \'#e8e2ca\', c2: \'#3e6c0a\', l: pie_data.data.length} )
          //.colorData( \'class\' )
          .colorData( \'default\' )
          .tooltipContent( function(key, x, y, e, graph) {
            return \'<p>Stage: <b>\' + key + \'</b></p>\' +
                   \'<p>Amount: <b>$\' +  parseInt(y) + \'K</b></p>\' +
                   \'<p>Percent: <b>\' +  x + \'%</b></p>\'
            })
        ;

      d3.select("#pie svg")
          .datum(pie_data_default)
        .transition().duration(500)
          .call(chart);

    return chart;
  });

  // Donut Chart
  nv.addGraph(function() {
    var chart = nv.models.pieChart()
          .x(function(d) { return d.key })
          .y(function(d) { return d.value })
          .showLabels(true)
          .showTitle(false)
          .donut(true)
          .donutRatio(0.4)
          .donutLabelsOutside(true)
          .hole(10)
          //.color(d3.scale.category10().range())
          //.colorData( \'graduated\', {c1: \'#e8e2ca\', c2: \'#3e6c0a\', l: pie_data.data.length} )
          //.colorData( \'class\' )
          .colorData( \'default\' )
          .tooltipContent( function(key, x, y, e, graph) {
            return \'<p>Stage: <b>\' + key + \'</b></p>\' +
                   \'<p>Amount: <b>$\' +  parseInt(y) + \'K</b></p>\' +
                   \'<p>Percent: <b>\' +  x + \'%</b></p>\'
            })
        ;

      d3.select("#donut svg")
          .datum(pie_data_default)
        .transition().duration(1200)
          .call(chart);

    return chart;
  });
</script>
',
      'components_collapse' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}

<!-- Collapse
================================================== -->
<section id="collapse">
  <div class="page-header">
    <h1>Collapse <small>bootstrap-collapse.js</small></h1>
  </div>
  <div class="row-fluid">
    <div class="span3 columns">
      <h3>About</h3>
      <p>Get base styles and flexible support for collapsible components like accordions and navigation.</p>
      <p>The bootsrap-collapse.js plugin is included in the default build of SugarCRM.</p>
    </div>
    <div class="span9 columns">
      <h2>Example accordion</h2>
      <p>Using the collapse plugin, we built a simple accordion style widget:</p>

      <div class="accordion" id="accordion2">
        <div class="accordion-group">
          <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
              Collapsible Group Item #1
            </a>
          </div>
          <div id="collapseOne" class="accordion-body collapse in">
            <div class="accordion-inner">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
        <div class="accordion-group">
          <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
              Collapsible Group Item #2
            </a>
          </div>
          <div id="collapseTwo" class="accordion-body collapse">
            <div class="accordion-inner">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
        <div class="accordion-group">
          <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
              Collapsible Group Item #3
            </a>
          </div>
          <div id="collapseThree" class="accordion-body collapse">
            <div class="accordion-inner">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
      </div>


      <hr>
      <h2>Using bootstrap-collapse.js</h2>
      <p>Enable via javascript:</p>
      <pre class="prettyprint linenums">$(".collapse").collapse()</pre>
      <h3>Options</h3>
      <table class="table table-bordered table-striped">
        <thead>
         <tr>
           <th style="width: 100px;">Name</th>
           <th style="width: 50px;">type</th>
           <th style="width: 50px;">default</th>
           <th>description</th>
         </tr>
        </thead>
        <tbody>
         <tr>
           <td>parent</td>
           <td>selector</td>
           <td>false</td>
           <td>If selector then all collapsible elements under the specified parent will be closed when this collasabile item is shown. (similar to traditional accordion behavior)</td>
         </tr>
         <tr>
           <td>toggle</td>
           <td>boolean</td>
           <td>true</td>
           <td>Toggles the collapsible element on invocation</td>
         </tr>
        </tbody>
      </table>
      <h3>Markup</h3>
      <p>Just add <code>data-toggle="collapse"</code> and a <code>data-target</code> to element to automatically assign control of a collapsible element. The <code>data-target</code> attribute accepts a css selector to apply the collapse to. Be sure to add the class <code>collapse</code> to the collapsible element. If you\'d like it to default open, add the additional class <code>in</code>.</p>
      <pre class="prettyprint linenums">
&lt;button class="btn btn-danger" data-toggle="collapse" data-target="#demo"&gt;
simple collapsible
&lt;/button&gt;

&lt;div id="demo" class="collapse in"&gt; … &lt;/div&gt;</pre>
      <div class="alert alert-info">
        <strong>Heads up!</strong>
        To add accordion-like group management to a collapsible control, add the data attribute <code>data-parent="#selector"</code>. Refer to the demo to see this in action.
      </div>
      <h3>Methods</h3>
      <h4>.collapse(options)</h4>
      <p>Activates your content as a collapsible element. Accepts an optional options <code>object</code>.
<pre class="prettyprint linenums">
$(\'#myCollapsible\').collapse({
toggle: false
})</pre>
      <h4>.collapse(\'toggle\')</h4>
      <p>Toggles a collapsible element to shown or hide.</p>
      <h4>.collapse(\'show\')</h4>
      <p>Shows a collapsible element.</p>
      <h4>.collapse(\'hide\')</h4>
      <p>Hides a collapsible element.</p>
      <h3>Events</h3>
      <p>
        Bootstrap\'s collapse class exposes a few events for hooking into collapse functionality.
      </p>
      <table class="table table-bordered table-striped">
        <thead>
         <tr>
           <th style="width: 150px;">Event</th>
           <th>Description</th>
         </tr>
        </thead>
        <tbody>
         <tr>
           <td>show</td>
           <td>This event fires immediately when the <code>show</code> instance method is called.</td>
         </tr>
         <tr>
           <td>shown</td>
           <td>This event is fired when a collapse element has been made visible to the user (will wait for css transitions to complete).</td>
         </tr>
         <tr>
           <td>hide</td>
           <td>
            This event is fired immediately when the <code>hide</code> method has been called.
           </td>
         </tr>
         <tr>
           <td>hide</td>
           <td>This event is fired when a collapse element has been hide from the user (will wait for css transitions to complete).</td>
         </tr>
        </tbody>
      </table>

<pre class="prettyprint linenums">
$(\'#myCollapsible\').on(\'hide\', function () {
// do something…
})</pre>
    </div>
  </div>
</section>
',
      'layouts_tabs' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
<!-- Nav, Tabs, & Pills
================================================== -->
<section id="nav-tabs-pills">
  <div class="page-header">
    <h1>Nav, tabs, and pills <small>Highly customizable list-style navigation</small></h1>
  </div>

  <h2>Lightweight defaults <small>Same markup, different classes</small></h2>
  <div class="row-fluid">
    <div class="span4">
      <h3>Powerful base class</h3>
      <p>All nav components here&mdash;tabs, pills, and lists&mdash;<strong>share the same base markup and styles</strong> through the <code>.nav</code> class.</p>
      <h3>Why tabs and pills</h3>
      <p>Tabs and pills are built on a <code>&lt;ul&gt;</code> with the same core HTML, a list of links. Swap between tabs or pills with only a class.</p>
      <p>Both options are great for sub-sections of content or navigating between pages of related content.</p>
    </div>
    <div class="span4">
      <h3>Basic tabs</h3>
      <p>Take a regular <code>&lt;ul&gt;</code> of links and add <code>.nav-tabs</code>:</p>
      <ul class="nav nav-tabs">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Messages</a></li>
      </ul>
<pre class="prettyprint linenums">
&lt;ul class="nav nav-tabs"&gt;
  &lt;li class="active"&gt;
    &lt;a href="#"&gt;Home&lt;/a&gt;
  &lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>
    </div>
    <div class="span4">
      <h3>Basic pills</h3>
      <p>Take that same HTML, but use <code>.nav-pills</code> instead:</p>
      <ul class="nav nav-pills">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Messages</a></li>
      </ul>
<pre class="prettyprint linenums">
&lt;ul class="nav nav-pills"&gt;
  &lt;li class="active"&gt;
    &lt;a href="#"&gt;Home&lt;/a&gt;
  &lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>
    </div>
  </div>

  <h2>Stackable <small>Make tabs or pills vertical</small></h2>
  <div class="row-fluid">
    <div class="span4">
      <h3>How to stack \'em</h3>
      <p>As tabs and pills are horizontal by default, just add a second class, <code>.nav-stacked</code>, to make them appear vertically stacked.</p>
    </div>
    <div class="span4">
      <h3>Stacked tabs</h3>
      <ul class="nav nav-tabs nav-stacked">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Messages</a></li>
      </ul>
<pre class="prettyprint linenums">
&lt;ul class="nav nav-tabs nav-stacked"&gt;
  ...
&lt;/ul&gt;
</pre>
    </div>
    <div class="span4">
      <h3>Stacked pills</h3>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Messages</a></li>
      </ul>
<pre class="prettyprint linenums">
&lt;ul class="nav nav-pills nav-stacked"&gt;
  ...
&lt;/ul&gt;
</pre>
    </div>
  </div>

  <h2>Dropdowns <small>For advanced nav components</small></h2>
  <div class="row-fluid">
    <div class="span4">
      <h3>Rich menus made easy</h3>
      <p>Dropdown menus in tabs and pills are super easy and require only a little extra HTML and a lightweight jQuery plugin.</p>
      <p>Head over to the Javascript page to read the docs on <a href="widgets.html#tabs">initializing dropdowns</a>.</p>
    </div>
    <div class="span4">
      <h3>Tabs with dropdowns</h3>
      <ul class="nav nav-tabs">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Profile</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown <i class="icon-caret-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
<pre class="prettyprint linenums">
&lt;ul class="nav nav-tabs"&gt;
  &lt;li class="dropdown"&gt;
    &lt;a class="dropdown-toggle"
       data-toggle="dropdown"
       href="#"&gt;
        Dropdown
        &lt;i class="icon-caret-down"&gt;&lt;/i&gt;
      &lt;/a&gt;
    &lt;ul class="dropdown-menu"&gt;
      &lt;!-- links --&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
&lt;/ul&gt;
</pre>
    </div>
    <div class="span4">
      <h3>Pills with dropdowns</h3>
      <ul class="nav nav-pills">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Profile</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown <i class="icon-caret-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
<pre class="prettyprint linenums">
&lt;ul class="nav nav-pills"&gt;
  &lt;li class="dropdown"&gt;
    &lt;a class="dropdown-toggle"
       data-toggle="dropdown"
       href="#"&gt;
        Dropdown
        &lt;i class="icon-caret-down"&gt;&lt;/i&gt;
      &lt;/a&gt;
    &lt;ul class="dropdown-menu"&gt;
      &lt;!-- links --&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
&lt;/ul&gt;
</pre>
    </div>
  </div>

  <h2>Nav lists <small>Build simple stacked navs, great for sidebars</small></h2>
  <div class="row-fluid">
    <div class="span4">
      <h3>Application-style navigation</h3>
      <p>Nav lists provide a simple and easy way to build groups of nav links with optional headers. They\'re best used in sidebars like the Finder in OS X.</p>
      <p>Structurally, they\'re built on the same core nav styles as tabs and pills, so usage and customization are straightforward.</p>
      <h4>With icons</h4>
      <p>Nav lists are also easy to equip with icons. Add the proper <code>&lt;i&gt;</code> tag with class and you\'re set.</p>
    </div>
    <div class="span4">
      <h3>Example nav list</h3>
      <p>Take a list of links and add <code>class="nav nav-list"</code>:</p>
      <div class="well" style="padding: 8px 0;">
        <ul class="nav nav-list">
          <li class="nav-header">List header</li>
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Library</a></li>
          <li><a href="#">Applications</a></li>
          <li class="nav-header">Another list header</li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">Settings</a></li>
          <li><a href="#">Help</a></li>
        </ul>
      </div> <!-- /well -->
<pre class="prettyprint linenums">
&lt;ul class="nav nav-list"&gt;
  &lt;li class="nav-header"&gt;
    List header
  &lt;/li&gt;
  &lt;li class="active"&gt;
    &lt;a href="#"&gt;Home&lt;/a&gt;
  &lt;/li&gt;
  &lt;li&gt;
    &lt;a href="#"&gt;Library&lt;/a&gt;
  &lt;/li&gt;
  ...
&lt;/ul&gt;
</pre>
    </div>
    <div class="span4">
      <h3>Example with Icons
        </h3>
      <p>Same example, but with <code>&lt;i&gt;</code> tags for icons.</p>
      <div class="well" style="padding: 8px 0;">
        <ul class="nav nav-list">
          <li class="nav-header">List header</li>
          <li class="active"><a href="#"><i class="icon-white icon-home"></i> Home</a></li>
          <li><a href="#"><i class="icon-book"></i> Library</a></li>
          <li><a href="#"><i class="icon-pencil"></i> Applications</a></li>
          <li class="nav-header">Another list header</li>
          <li><a href="#"><i class="icon-user"></i> Profile</a></li>
          <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
          <li><a href="#"><i class="icon-flag"></i> Help</a></li>
        </ul>
      </div> <!-- /well -->
<pre class="prettyprint linenums">
&lt;ul class="nav nav-list"&gt;
  ...
  &lt;li&gt;
    &lt;a href="#"&gt;
      &lt;i class="icon-book"&gt;&lt;/i&gt;
      Library
    &lt;/a&gt;
  &lt;/li&gt;
  ...
&lt;/ul&gt;
</pre>
    </div>
  </div>


  <h2>Tabbable nav <small>Bring tabs to life via javascript</small></h2>
  <div class="row-fluid">
    <div class="span4">
      <h3>What\'s included</h3>
      <p>Bring your tabs to life with a simple plugin to toggle between content via tabs. The framework integrates tabbable tabs in four styles: top (default), right, bottom, and left.</p>
      <p>Changing between them is easy and only requires changing very little markup.</p>
    </div>
    <div class="span4">
      <h3>Tabbable example</h3>
      <p>To make tabs tabbable, wrap the <code>.nav-tabs</code> in another div with class <code>.tabbable</code>.</p>
      <div class="tabbable" style="margin-bottom: 9px;">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#" data-toggle="tab" data-target="tab1">Section 1</a></li>
          <li><a href="#" data-toggle="tab" data-target="tab2">Section 2</a></li>
          <li><a href="#" data-toggle="tab" data-target="tab3">Section 3</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab1">
            <p>I\'m in Section 1.</p>
          </div>
          <div class="tab-pane" id="tab2">
            <p>Howdy, I\'m in Section 2.</p>
          </div>
          <div class="tab-pane" id="tab3">
            <p>What up girl, this is Section 3.</p>
          </div>
        </div>
      </div> <!-- /tabbable -->
    </div>
    <div class="span4">
      <h3>Custom jQuery plugin</h3>
      <p>All tabbable tabs are powered by our lightweight jQuery plugin. Read more about how to bring tabbable tabs to life on the javascript docs page.</p>
      <p><a class="btn" href="widgets.html#tabs">Get the javascript &rarr;</a></p>
    </div>
  </div>

  <h3>Straightforward markup</h3>
  <p>Using tabbable tabs requires a wrapping div, a set of tabs, and a set of tabbable panes of content.</p>
<pre class="prettyprint linenums">
&lt;div class="tabbable"&gt;
  &lt;ul class="nav nav-tabs"&gt;
    &lt;li class="active"&gt;&lt;a href="#" data-toggle="tab" data-target="tab1"&gt;Section 1&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#" data-toggle="tab" data-target="tab2"&gt;Section 2&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
  &lt;div class="tab-content"&gt;
    &lt;div class="tab-pane active" id="tab1"&gt;
      &lt;p&gt;I\'m in Section 1.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane" id="tab2"&gt;
      &lt;p&gt;Howdy, I\'m in Section 2.&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>

  <h3>Tabbable in any direction</h3>
  <div class="row-fluid">
    <div class="span4">
      <h4>Tabs on the bottom</h4>
      <p>Flip the order of the HTML and add a class to put tabs on the bottom.</p>
      <div class="tabbable tabs-below">
        <div class="tab-content">
          <div class="tab-pane active" id="tabA">
            <p>I\'m in Section A.</p>
          </div>
          <div class="tab-pane" id="tabB">
            <p>Howdy, I\'m in Section B.</p>
          </div>
          <div class="tab-pane" id="tabC">
            <p>What up girl, this is Section C.</p>
          </div>
        </div>
        <ul class="nav nav-tabs">
          <li class="active"><a href="#" data-toggle="tab" data-target="tabA">Section 1</a></li>
          <li><a href="#" data-toggle="tab" data-target="tabB">Section 2</a></li>
          <li><a href="#" data-toggle="tab" data-target="tabC">Section 3</a></li>
        </ul>
      </div> <!-- /tabbable -->
<pre class="prettyprint linenums" style="margin-top: 11px;">
&lt;div class="tabbable tabs-below"&gt;
  &lt;div class="tab-content"&gt;
    ...
  &lt;/div&gt;
  &lt;ul class="nav nav-tabs"&gt;
    ...
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
    </div>
    <div class="span4">
      <h4>Tabs on the left</h4>
      <p>Swap the class to put tabs on the left.</p>
      <div class="tabbable tabs-left">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#" data-toggle="tab" data-target="tablA">Section 1</a></li>
          <li><a href="#" data-toggle="tab" data-target="tablB">Section 2</a></li>
          <li><a href="#" data-toggle="tab" data-target="tablC">Section 3</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tablA">
            <p>I\'m in Section A.</p>
          </div>
          <div class="tab-pane" id="tablB">
            <p>Howdy, I\'m in Section B.</p>
          </div>
          <div class="tab-pane" id="tablC">
            <p>What up girl, this is Section C.</p>
          </div>
        </div>
      </div> <!-- /tabbable -->
<pre class="prettyprint linenums">
&lt;div class="tabbable tabs-left"&gt;
  &lt;ul class="nav nav-tabs"&gt;
    ...
  &lt;/ul&gt;
  &lt;div class="tab-content"&gt;
    ...
  &lt;/div&gt;
&lt;/div&gt;
</pre>
    </div>
    <div class="span4">
      <h4>Tabs on the right</h4>
      <p>Swap the class to put tabs on the right.</p>
      <div class="tabbable tabs-right">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#" data-toggle="tab" data-target="tabrA">Section 1</a></li>
          <li><a href="#" data-toggle="tab" data-target="tabrA">Section 2</a></li>
          <li><a href="#" data-toggle="tab" data-target="tabrA">Section 3</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tabrA">
            <p>I\'m in Section A.</p>
          </div>
          <div class="tab-pane" id="tabrB">
            <p>Howdy, I\'m in Section B.</p>
          </div>
          <div class="tab-pane" id="tabrC">
            <p>What up girl, this is Section C.</p>
          </div>
        </div>
      </div> <!-- /tabbable -->
<pre class="prettyprint linenums">
&lt;div class="tabbable tabs-right"&gt;
  &lt;ul class="nav nav-tabs"&gt;
    ...
  &lt;/ul&gt;
  &lt;div class="tab-content"&gt;
    ...
  &lt;/div&gt;
&lt;/div&gt;
</pre>
    </div>
  </div>

</section>
',
      'base_edit' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}

<section id="edit-documentation">
  <div class="page-header">
    <h1>Edit Documentation <small>Instructions for updating Styleguide documentation.</small></h1>
  </div>

  <h2>Pages as Handlebar Templates</h2>
  <div class="row-fluid">
    <div class="span12">
      <p>Each page in the Styleguide Documentation exists as a Handlebars template (.hbs) in the folder <code>/sugarcrm/Modules/Styleguide/clients/base/views/content</code> using the following naming convention: <code>[SECTION].[PAGE]</code>.</p>
    </div>
  </div>

  <h2>Registering Page in View Metadata</h2>
  <div class="row-fluid">
    <div class="span5">
      <p>If you want a page to be listed in the Styleguide index page and in the headerpane select, it must be registered in a pageData associative array defined in the docs view metadata file <code>/sugarcrm/Modules/Styleguide/clients/base/views/sg-headerpane/sg-headerpane.php</code>.</p>
      <p>This array contains sections which contain a collection of page data arrays. The <code>[SECTION].[PAGE]</code> relationship is used to call an individual page like <code>&lt;a href="#Styleguide/docs/forms.datetime"&gt;Datetime picker&lt;/a&gt;</code>. Section index pages are called in the form <code>index.[SECTION]</code></p>
      <p>The page data can contain a url property if you want to link to a page outside the docs.</p>
    </div>
    <div class="span7">
<pre class="prettyprint linenums">
"forms" => array (
    "title" => "Form Elements",
    "description" => "Basic form elements and layouts for a consistent editing experience.",
    "index" => true,
    "pages" => array (
        "fields" => array("label"=>"Sugar7 fields", "url"=>"#Styleguide/field/all", "description"=>"Basic fields that support detail, record, and edit modes with error addons."),
        "buttons" => array("label"=>"Buttons", "description"=>"Standard css only button styles."),
        ...
        "jstree" => array("label"=>"jsTree", "description"=>"jQuery plugin cross browser tree component."),
        "range" => array("label"=>"Range Slider", "description"=>"jQuery plugin range picker."),
        "switch" => array("label"=>"Switch", "description"=>"jQuerty plugin turns check boxes into toggle switch."),
    )
),
</pre>
    </div>
  </div>

  <h2>Setting Page Variables</h2>
  <div class="row-fluid">
    <div class="span5">
      <p>Variables for use in the documentation pages are defined in the documentation view controller <code>/sugarcrm/Modules/Styleguide/clients/base/views/docs/docs.js</code>. If you need to define a variable, create a new function in <code>docs.js</code> in the <code>/*INIT*/</code> section using the following naming convention <code>init_[PAGE]</code>. For example, the list of Sugar7 modules for the <code>base.labels</code> page is defined prior to rendering using the function <code>init_labels</code>(which is called automatically by the doc controller).</p>
      <p>The pageData variable is an object that is available from within the Handlebars template.</p>
    </div>
    <div class="span7">
<pre class="prettyprint linenums">
init_labels: function(pageData) {
    pageData.module_list = [];
    if (app.metadata.getModuleNames(true, \'read\')) {
        _.each(app.metadata.getModuleNames(true, \'read\'), function(val) {
            if ([\'Home\'].indexOf(val)===-1) {
                pageData.module_list.push(val);
            }
        });
    }
    pageData.module_list.sort();
},
</pre>
    </div>
  </div>

  <h2>Using Page Variables</h2>
  <div class="row-fluid">
    <div class="span5">
      <p>The documentation pages are generally static HTML although, as a Handlebars template, dynamic variables can be inserted into the documentation page by wrapping the variable in double braces (<code>&#123;&#123;variable&#125;&#125;</code>). To escape variables containing HTML tags use triple braces (<code>&#123;&#123;&#123;html&#125;&#125;&#125;</code>). See complete <a href="http://handlebarsjs.com/" target="_blank">Handlebars documentation</a> for details.</p>
      <p>Using our <code>base.labels</code> page as an example, here is how the table of module element icons is built.
    </div>
    <div class="span7">
<pre class="prettyprint linenums">
&lt;table class="table table-bordered table-striped"&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th&gt;Module&lt;/th&gt;
      &lt;th&gt;Labels&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
&#123;&#123;#each pageData.module_list&#125;&#125;
    &lt;tr&gt;
      &lt;td&gt;&lt;b&gt;&#123;&#123;this&#125;&#125;&lt;/b&gt;&lt;/td&gt;
      &lt;td&gt;
        &lt;span class="label label-module label-&#123;&#123;this&#125;&#125;" rel="tooltip" data-title="&#123;&#123;moduleIconToolTip this&#125;&#125;"&gt;&#123;&#123;moduleIconLabel this&#125;&#125;&lt;/span&gt;
      &lt;/td&gt;
    &lt;/tr&gt;
&#123;&#123;/each&#125;&#125;
  &lt;/tbody&gt;
&lt;/table&gt;
</pre>
    </div>
  </div>

  <h2>Using jQuery in Pages</h2>
  <div class="row-fluid">
    <div class="span5">
      <p>Just like for the functions you create for intializing page variables prior to rendering, if you want to use jQuery on your documentation page, create a render function in <code>docs.js</code>in the <code>/*RENDER*/</code> section using a similar naming convention: <code>render_[PAGE].</code></p>
      <p>These functions will be called automatically by the docs controller after the page is rendered.</p>
    </div>
    <div class="span7">
<pre class="prettyprint linenums">
render_tabs: function(view) {
    view.$(\'#nav-tabs-pills\')
        .find(\'ul.nav-tabs > li > a, ul.nav-list > li > a, ul.nav-pills > li > a\')
        .on(\'click.styleguide\', function(e){
            e.preventDefault();
            e.stopPropagation();
            $(this).tab(\'show\');
        });
},
</pre>
    </div>
  </div>

</section>

',
      'index' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
{{#index_search}}
<form class="filterform" action="#">
  <div class="row-fluid section-search">
    <div class="btn-toolbar span4 offset4">
      <div class="btn-group">
        <input type="text" name="section_search" class="filterinput" value="" placeholder="Find any pattern&hellip;">
        <a class="btn" href="#"><i class="icon icon-search"></i></a>
      </div>
    </div>
  </div>
</form>
{{/index_search}}
<div id="index-content">
</div>
',
      'base_labels' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
<!-- Labels
================================================== -->
<section id="labels">
  <div class="page-header">
    <h1>Inline labels <small>Label and annotate text</small></h1>
  </div>

  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Labels</th>
        <th>Markup</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><span class="label">Default</span></td>
        <td><code>&lt;span class="label"&gt;Default&lt;/span&gt;</code></td>
      </tr>
      <tr>
        <td><span class="label label-important">Important</span></td>
        <td><code>&lt;span class="label label-important"&gt;Important&lt;/span&gt;</code></td>
      </tr>
      <tr>
        <td><span class="label label-warning">Warning</span></td>
        <td><code>&lt;span class="label label-warning"&gt;warning&lt;/span&gt;</code></td>
      </tr>
      <tr>
        <td><span class="label label-pending">Pending</span></td>
        <td><code>&lt;span class="label label-pending"&gt;warning&lt;/span&gt;</code></td>
      </tr>
      <tr>
        <td><span class="label label-success">Success</span></td>
        <td><code>&lt;span class="label label-success"&gt;Success&lt;/span&gt;</code></td>
      </tr>
      <tr>
        <td><span class="label label-info">Info</span></td>
        <td><code>&lt;span class="label label-info"&gt;Info&lt;/span&gt;</code></td>
      </tr>
      <tr>
        <td><span class="label label-inverse">Inverse</span></td>
        <td><code>&lt;span class="label label-inverse"&gt;Inverse&lt;/span&gt;</code></td>
      </tr>
    </tbody>
  </table>

  <h3>Module Element Badges</h3>

  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Module</th>
        <th>Labels</th>
        <th>module Singular</th>
        <th>Class Name</th>
      </tr>
    </thead>
    <tbody>
  {{#each pageData.module_list}}
      <tr>
        <td><b>{{this}}</b></td>
        <td>
          <span class="label label-module label-{{this}}" rel="tooltip" data-title="{{moduleIconToolTip this}}">{{moduleIconLabel this}}</span>
          <span class="label label-module-sm label-{{this}}" rel="tooltip" data-title="{{moduleIconToolTip this}}">{{moduleIconLabel this}}</span>
          <span class="label label-module-mini label-{{this}}" rel="tooltip" data-title="{{moduleIconToolTip this}}">{{moduleIconLabel this}}</span>
        </td>
        <td>{{moduleIconToolTip this}}</td>
        <td><code>.label-{{this}}</code></td>
      </tr>
  {{/each}}
    </tbody>
  </table>
  </div>

  <h3>Markup</h3>

<pre class="prettyprint linenums">
&lt;span class="label label-module label-&#123;&#123;this.module}}" rel="tooltip" data-title="&#123;&#123;moduleIconToolTip this.module}}"&gt;&#123;&#123;moduleIconLabel this.module}}&lt;/span&gt;
</pre>

  <h3>CSS</h3>
  <div class="row">
    <div class="span2">
      <code>.label-module</code>
    </div>
    <div class="span2">
      <span class="label label-module label-Modules" rel="tooltip" data-title="Modules">Mo</span>
    </div>
  </div>
  <div class="row">
    <div class="span2">
      <code>.label-module-sm</code>
    </div>
    <div class="span2">
      <span class="label label-module-sm label-Modules" rel="tooltip" data-title="Modules">Mo</span>
    </div>
  </div>
  <div class="row">
    <div class="span2">
      <code>.label-module-mini</code>
    </div>
    <div class="span2">
      <span class="label label-module-mini label-Modules" rel="tooltip" data-title="Modules">Mo</span>
    </div>
  </div>
</section>
',
      'base_mixins' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}

<!-- MIXINS
================================================== -->
<section id="mixins">
  <div class="page-header">
    <h1>Mixins <small></small></h1>
  </div>
  <h2>About mixins</h2>
  <div class="row-fluid">
    <div class="span4">
      <h3>Basic mixins</h3>
      <p>A basic mixin is essentially an include or a partial for a snippet of CSS. They\'re written just like a CSS class and can be called anywhere.</p>
<pre class="prettyprint linenums">
.element {
  .clearfix();
}
</pre>
    </div><!-- /span4 -->
    <div class="span4">
      <h3>Parametric mixins</h3>
      <p>A parametric mixin is just like a basic mixin, but it also accepts parameters (hence the name) with optional default values.</p>
<pre class="prettyprint linenums">
.element {
  .border-radius(4px);
}
</pre>
    </div><!-- /span4 -->
    <div class="span4">
      <h3>Easily add your own</h3>
      <p>Nearly all of the mixins are stored in mixins.less, a wonderful utility .less file that enables you to use a mixin in any of the .less files in the toolkit.</p>
      <p>So, go ahead and use the existing ones or feel free to add your own as you need.</p>
    </div><!-- /span4 -->
  </div><!-- /row -->
  <h2>Included mixins</h2>
  <h3>Utilities</h3>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th class="span4">Mixin</th>
        <th>Parameters</th>
        <th>Usage</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>.clearfix()</code></td>
        <td><em class="muted">none</em></td>
        <td>Add to any parent to clear floats within</td>
      </tr>
      <tr>
        <td><code>.tab-focus()</code></td>
        <td><em class="muted">none</em></td>
        <td>Apply the Webkit focus style and round Firefox outline</td>
      </tr>
      <tr>
        <td><code>.center-block()</code></td>
        <td><em class="muted">none</em></td>
        <td>Auto center a block-level element using <code>margin: auto</code></td>
      </tr>
      <tr>
        <td><code>.ie7-inline-block()</code></td>
        <td><em class="muted">none</em></td>
        <td>Use in addition to regular <code>display: inline-block</code> to get IE7 support</td>
      </tr>
      <tr>
        <td><code>.size()</code></td>
        <td><code>@height: 5px, @width: 5px</code></td>
        <td>Quickly set the height and width on one line</td>
      </tr>
      <tr>
        <td><code>.square()</code></td>
        <td><code>@size: 5px</code></td>
        <td>Builds on <code>.size()</code> to set the width and height as same value</td>
      </tr>
      <tr>
        <td><code>.opacity()</code></td>
        <td><code>@opacity: 100</code></td>
        <td>Set, in whole numbers, the opacity percentage (e.g., "50" or "75")</td>
      </tr>
    </tbody>
  </table>
  <h3>Forms</h3>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th class="span4">Mixin</th>
        <th>Parameters</th>
        <th>Usage</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>.placeholder()</code></td>
        <td><code>@color: @placeholderText</code></td>
        <td>Set the <code>placeholder</code> text color for inputs</td>
      </tr>
    </tbody>
  </table>
  <h3>Typography</h3>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th class="span4">Mixin</th>
        <th>Parameters</th>
        <th>Usage</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>#font > #family > .serif()</code></td>
        <td><em class="muted">none</em></td>
        <td>Make an element use a serif font stack</td>
      </tr>
      <tr>
        <td><code>#font > #family > .sans-serif()</code></td>
        <td><em class="muted">none</em></td>
        <td>Make an element use a sans-serif font stack</td>
      </tr>
      <tr>
        <td><code>#font > #family > .monospace()</code></td>
        <td><em class="muted">none</em></td>
        <td>Make an element use a monospace font stack</td>
      </tr>
      <tr>
        <td><code>#font > .shorthand()</code></td>
        <td><code>@size: @baseFontSize, @weight: normal, @lineHeight: @baseLineHeight</code></td>
        <td>Easily set font size, weight, and leading</td>
      </tr>
      <tr>
        <td><code>#font > .serif()</code></td>
        <td><code>@size: @baseFontSize, @weight: normal, @lineHeight: @baseLineHeight</code></td>
        <td>Set font family to serif, and control size, weight, and leading</td>
      </tr>
      <tr>
        <td><code>#font > .sans-serif()</code></td>
        <td><code>@size: @baseFontSize, @weight: normal, @lineHeight: @baseLineHeight</code></td>
        <td>Set font family to sans-serif, and control size, weight, and leading</td>
      </tr>
      <tr>
        <td><code>#font > .monospace()</code></td>
        <td><code>@size: @baseFontSize, @weight: normal, @lineHeight: @baseLineHeight</code></td>
        <td>Set font family to monospace, and control size, weight, and leading</td>
      </tr>
    </tbody>
  </table>
  <h3>Grid system</h3>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th class="span4">Mixin</th>
        <th>Parameters</th>
        <th>Usage</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>.container-fixed()</code></td>
        <td><em class="muted">none</em></td>
        <td>Provide a fixed-width (set with <code>@siteWidth</code>) container for holding your content</td>
      </tr>
      <tr>
        <td><code>.columns()</code></td>
        <td><code>@columns: 1</code></td>
        <td>Build a grid column that spans any number of columns (defaults to 1 column)</td>
      </tr>
      <tr>
        <td><code>.offset()</code></td>
        <td><code>@columns: 1</code></td>
        <td>Offset a grid column with left margin that spans any number of columns</td>
      </tr>
      <tr>
        <td><code>.gridColumn()</code></td>
        <td><em class="muted">none</em></td>
        <td>Make an element float like a grid column</td>
      </tr>
    </tbody>
  </table>
  <h3>CSS3 properties</h3>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th class="span4">Mixin</th>
        <th>Parameters</th>
        <th>Usage</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>.border-radius()</code></td>
        <td><code>@radius: 5px</code></td>
        <td>Round the corners of an element. Can be a single value or four space-separated values</td>
      </tr>
      <tr>
        <td><code>.box-shadow()</code></td>
        <td><code>@shadow: 0 1px 3px rgba(0,0,0,.25)</code></td>
        <td>Add a drop shadow to an element</td>
      </tr>
      <tr>
        <td><code>.transition()</code></td>
        <td><code>@transition</code></td>
        <td>Add CSS3 transition effect (e.g., <code>all .2s linear</code>)</td>
      </tr>
      <tr>
        <td><code>.rotate()</code></td>
        <td><code>@degrees</code></td>
        <td>Rotate an element <em>n</em> degrees</td>
      </tr>
      <tr>
        <td><code>.scale()</code></td>
        <td><code>@ratio</code></td>
        <td>Scale an element to <em>n</em> times it\'s original size</td>
      </tr>
      <tr>
        <td><code>.translate()</code></td>
        <td><code>@x: 0, @y: 0</code></td>
        <td>Move an element on the x and y planes</td>
      </tr>
      <tr>
        <td><code>.background-clip()</code></td>
        <td><code>@clip</code></td>
        <td>Crop the backgroud of an element (useful for <code>border-radius</code>)</td>
      </tr>
      <tr>
        <td><code>.background-size()</code></td>
        <td><code>@size</code></td>
        <td>Control the size of background images via CSS3</td>
      </tr>
      <tr>
        <td><code>.box-sizing()</code></td>
        <td><code>@boxmodel</code></td>
        <td>Change the box model for an element (e.g., <code>border-box</code> for a full-width <code>input</code>)</td>
      </tr>
      <tr>
        <td><code>.user-select()</code></td>
        <td><code>@select</code></td>
        <td>Control cursor selection of text on a page</td>
      </tr>
      <tr>
        <td><code>.resizable()</code></td>
        <td><code>@direction: both</code></td>
        <td>Make any element resizable on the right and bottom</td>
      </tr>
      <tr>
        <td><code>.content-columns()</code></td>
        <td><code>@columnCount, @columnGap: @gridColumnGutter</code></td>
        <td>Make the content of any element use CSS3 columns</td>
      </tr>
    </tbody>
  </table>
  <h3>Backgrounds and gradients</h3>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th class="span4">Mixin</th>
        <th>Parameters</th>
        <th>Usage</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>.#translucent > .background()</code></td>
        <td><code>@color: @white, @alpha: 1</code></td>
        <td>Give an element a translucent background color</td>
      </tr>
      <tr>
        <td><code>.#translucent > .border()</code></td>
        <td><code>@color: @white, @alpha: 1</code></td>
        <td>Give an element a translucent border color</td>
      </tr>
      <tr>
        <td><code>.#gradient > .vertical()</code></td>
        <td><code>@startColor, @endColor</code></td>
        <td>Create a cross-browser vertical background gradient</td>
      </tr>
      <tr>
        <td><code>.#gradient > .horizontal()</code></td>
        <td><code>@startColor, @endColor</code></td>
        <td>Create a cross-browser horizontal background gradient</td>
      </tr>
      <tr>
        <td><code>.#gradient > .directional()</code></td>
        <td><code>@startColor, @endColor, @deg</code></td>
        <td>Create a cross-browser directional background gradient</td>
      </tr>
      <tr>
        <td><code>.#gradient > .vertical-three-colors()</code></td>
        <td><code>@startColor, @midColor, @colorStop, @endColor</code></td>
        <td>Create a cross-browser three-color background gradient</td>
      </tr>
      <tr>
        <td><code>.#gradient > .radial()</code></td>
        <td><code>@innerColor, @outerColor</code></td>
        <td>Create a cross-browser radial background gradient</td>
      </tr>
      <tr>
        <td><code>.#gradient > .striped()</code></td>
        <td><code>@color, @angle</code></td>
        <td>Create a cross-browser striped background gradient</td>
      </tr>
      <tr>
        <td><code>.#gradientBar()</code></td>
        <td><code>@primaryColor, @secondaryColor</code></td>
        <td>Used for buttons to assign a gradient and slightly darker border</td>
      </tr>
    </tbody>
  </table>
</section>
',
      'forms_jstree' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
<!-- jstree
================================================== -->
<section id="jstree">
    <div class="page-header">
        <h1>JSTree <small>tree control component built with jsTree jQuery plugin</small></h1>
    </div>
    <div class="row-fluid">
        <div class="span3 columns">
            <h3>About</h3>
            <p>jsTree is a javascript based, cross browser tree component.</p>
            <p>The jquery.jstree.js plugin is included in the default build of SugarCRM. [<a href="http://www.jstree.com/documentation"><i class="icon-book"></i> Docs</a>]</p>
        </div>
        <div class="span9 columns">
            <h2>Example</h2>
            <p>Click on the folder icons to expand/collapse children</p>
            <div id="people">
            </div>
            <hr>
            <h2>Using jquery.jstree.js</h2>
            <p>Call jstree via javascript:</p>
<pre class="prettyprint linenums">
$("#people").jstree({
    // generating tree from json data
    "json_data" : {
        "data" : [
            {
                "data" : "Sabra Khan",
                "state" : "open",
                "metadata" : { id : 1 },
                "children" : [
                    {"data" : "Mark Gibson","metadata" : { id : 2 }},
                    {"data" : "James Joplin","metadata" : { id : 3 }},
                    {"data" : "Terrence Li","metadata" : { id : 4 }},
                    {
                        "data" : "Amy McCray",
                        "metadata" : { id : 5 },
                        "children" : [
                            {"data" : "Troy McClure","metadata" : {id : 6}},
                            {"data" : "James Kirk","metadata" : {id : 7}}
                        ]
                    }
                ]
            }
        ]
    },
    // plugins used for this tree
    "plugins" : [ "json_data", "ui", "types" ]
})
.bind("loaded.jstree", function () {
    // do stuff when tree is loaded
    $("#people").addClass("jstree-sugar");
    $("#people > ul").addClass("list");
    $("#people > ul > li > a").addClass("jstree-clicked");
})
.bind("select_node.jstree", function (e, data) {
    // do stuff when a node is selected
    data.inst.toggle_node(data.rslt.obj);
});</pre>
            <h3>Plugins</h3>
            As of version 1.0 jsTree is extremely plugin friendly, so all functionality is now wrapped in plugins, which take care of various aspects of the tree and can be removed without affecting the functionality of other plugins. Below you will find a list of plugins - each with its own documentation page. Probably a good place to start is the core.
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th style="width: 100px;">Name</th>
                    <th>description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a href="http://www.jstree.com/documentation/html_data" target="_blank">HTML_DATA plugin</a></td>
                    <td>enables jsTree to convert nested unordered lists to interactive trees, an already existing UL may be used or data could be retrieved from a server</td>

                </tr>
                <tr>
                    <td><a href="http://www.jstree.com/documentation/json_data" target="_blank">JSON_DATA plugin</a></td>
                    <td>enables jsTree to convert JSON objects to interactive trees, data can be set up in the config or retrieved from a server.</td>
                </tr>
                <tr>
                    <td><a href="http://www.jstree.com/documentation/xml_data" target="_blank">XML_DATA plugin</a></td>
                    <td>enables jsTree to convert XML objects to interactive trees (using XSL), data can be set up in the config or retrieved from a server</td>
                </tr>
                <!--tr>
                    <td>Themes plugin</td>
                    <td>controls the looks of jstree - without this plugin you will get a functional tree, but it will look just like an ordinary UL list</td>
                </tr-->
                <tr>
                    <td><a href="http://www.jstree.com/documentation/ui" target="_blank">UI plugin</a></td>
                    <td>handles selecting, deselecting and hovering tree items</td>
                </tr>
                <tr>
                    <td><a href="http://www.jstree.com/documentation/crrm" target="_blank">CRRM plugin</a></td>
                    <td>handles creating, renaming, removing and moving nodes by the user, also includes cut/copy/paste functions</td>
                </tr>
                <tr>
                    <td><a href="http://www.jstree.com/documentation/hotkeys" target="_blank">Hotkeys plugin</a></td>
                    <td>enables support for keyboard navigation & shortcuts, highly configurable</td>
                </tr>
                <tr>
                    <td><a href="http://www.jstree.com/documentation/languages" target="_blank">Languages plugin</a></td>
                    <td>enables multilanguage support - each node can have multiple titles, but only one is visible</td>
                </tr>
                <tr>
                    <td><a href="http://www.jstree.com/documentation/cookies" target="_blank">Cookies plugin</a></td>
                    <td>enables jstree to save the state of the tree across sessions, by saving selected and opened nodes in a cookie</td>
                </tr>
                <tr>
                    <td><a href="http://www.jstree.com/documentation/sort" target="_blank">Sort plugin</a></td>
                    <td>enables jstree to automatically sort all nodes
                        using a specified function</td>
                </tr>
                <tr>
                    <td><a href="http://www.jstree.com/documentation/dnd" target="_blank">DND plugin</a></td>
                    <td>enables drag\'n\'drop support for jstree, also using foreign nodes and drop targets</td>
                </tr>
                <tr>
                    <td><a href="http://www.jstree.com/documentation/checkbox" target="_blank">Checkbox plugin</a></td>
                    <td>makes multiselection possible using three-state checkboxes</td>
                </tr>
                <tr>
                    <td><a href="http://www.jstree.com/documentation/search" target="_blank">Search plugin</td>
                    <td>enables searching for nodes whose title contains a given string, works on async trees too</td>
                </tr>
                <tr>
                    <td><a href="http://www.jstree.com/documentation/contextmenu" target="_blank">Contextmenu plugin</a></td>
                    <td>enables a multilevel context menu on tree items</td>
                </tr>
                <tr>
                    <td><a href="http://www.jstree.com/documentation/types" target="_blank">Types plugin</a></td>
                    <td>each node can have a type, and you can define rules on how that type should behave</td>
                </tr>
                <tr>
                    <td><a href="http://www.jstree.com/documentation/themeroller" target="_blank">Themeroller plugin</a></td>
                    <td>adds support for jQuery UI\'s themes</td>
                </tr>
                <tr>
                    <td><a href="http://www.jstree.com/documentation/unique" target="_blank">Unique plugin</a></td>
                    <td>adds unique checking to jsTree</td>
                </tr>
                </tbody>
            </table>

            <h3>Markup</h3>
            <p>The basic structure you need when generating a tree from JSON data.</p>
<pre class="prettyprint linenums">
&lt;div id="people"&gt;&lt;/div&gt;
</pre>
        </div>
    </div>
</section>
',
      'charts_custom' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
   <section id="custom">
      <div class="page-header">
        <h2>Custom Charts <small>used for comparing values in a process</small></h2>
      </div>

      <div class="row-fluid">
        <div class="span6">
          <h3>Pipeline By Sales Stage</h3>
          <p>A new NVD3 funnel chart type created for SugarCRM. [<a href="styleguide/content/charts/funnelChart.html" target="_blank">Full Screen</a> | <a href="styleguide/content/charts/funnelChart_colors.html" target="_blank">Color Options</a>]</p>
          <div>
<div id="funnel1" class="thumbnail nv-chart">
  <svg></svg>
</div>
          </div>
        </div>
        <div class="span6">
          <h3>Closed Won Opportunities</h3>
          <p>A new NVD3 gauge chart type created for SugarCRM. [<a href="styleguide/content/charts/gaugeChart.html" target="_blank">Full Screen</a> | <a href="styleguide/content/charts/gaugeChart_colors.html" target="_blank">Color Options</a>]</p>
          <div>
<div id="gauge" class="thumbnail nv-chart">
  <svg></svg>
</div>
          </div>
        </div>
      </div>

      <div class="row-fluid" style="margin-top:8px">
        <div class="span6">
          <h3>Treemap Chart</h3>
          <p>A new NVD3 treemap chart type created for SugarCRM. [<a href="styleguide/content/charts/treemapChart.html" target="_blank">Full Screen</a> | <a href="styleguide/content/charts/treemapChart_colors.html" target="_blank">Color Options</a>]</p>
          <div>
<div id="treemap1" class="thumbnail nv-chart nv-treemap">
  <svg></svg>
</div>
          </div>
        </div>
        <div class="span6">
          <h3>Opportunities</h3>
          <p>A new NVD3 treemap chart type created for SugarCRM. [<a href="styleguide/content/charts/treemapChart_opportunities.html" target="_blank">Full Screen</a>]</p>
          <div>
<div id="treemap2" class="thumbnail nv-chart nv-treemap">
  <svg></svg>
</div>
          </div>
        </div>
      </div>

      <div class="row-fluid" style="margin-top:8px">
        <div class="span6">
          <h3>Org Chart</h3>
          <p>A new NVD3 tree chart type created for SugarCRM. [<a href="styleguide/content/charts/orgChart.html" target="_blank">Full Screen</a>]</p>
          <div>
<div id="org" class="thumbnail nv-chart nv-chart-org">
  <svg></svg>
</div>
          </div>
        </div>
        <div class="span6">
          <h3>Bubble Chart</h3>
          <p>A new NVD3 tree chart type created for SugarCRM. [<a href="styleguide/content/charts/bubbleChart.html" target="_blank">Full Screen</a> | <a href="styleguide/content/charts/bubbleChart_colors.html" target="_blank">Color Options</a>]</p>
          <div>
<div id="bubble" class="thumbnail nv-chart nv-bubble">
  <svg></svg>
</div>
          </div>
        </div>
      </div>
    </section>

<script src="styleguide/content/charts/data/bubble_data.js"></script>
<script src="styleguide/content/charts/data/gauge_data.js"></script>
<script src="styleguide/content/charts/data/funnel_data.js"></script>
<script src="styleguide/content/charts/data/treemap_data.js"></script>
<script src="styleguide/content/charts/data/flare.js"></script>
<script src="styleguide/content/charts/data/tree_data.js"></script>

<script>
  // Funnel Chart
  nv.addGraph(function() {
    var chart = nv.models.funnelChart()
          .showTitle(false)
          .tooltipContent( function(key, x, y, e, graph) {
              return \'<p>Stage: <b>\' + key + \'</b></p>\' +
                     \'<p>Amount: <b>$\' +  parseInt(y) + \'K</b></p>\' +
                     \'<p>Percent: <b>\' +  x + \'%</b></p>\'
            });

    chart.yAxis
        .tickFormat(d3.format(\',.1f\'));

    d3.select(\'#funnel1 svg\')
        .datum(funnel_data_default)
      .transition().duration(500)
        .call(chart);

    return chart;
  });

  // Gauge Chart
  nv.addGraph(function() {
    var gauge = nv.models.gaugeChart()
          .x(function(d) { return d.key })
          .y(function(d) { return d.y })
          .showLabels(true)
          .showTitle(false)
          .colorData( \'default\' )
          .ringWidth(50)
          .maxValue(9)
          .transitionMs(4000);

    d3.select("#gauge svg")
        .datum(gauge_data_color)
      .transition().duration(500)
        .call(gauge);

    return gauge;
  });

  // Treemap flare chart
  nv.addGraph(function() {

    var chart = nv.models.treemapChart()
          .leafClick( function(d) {
              alert(\'leaf clicked\');
          })
          .showTitle(false)
          .tooltips(true)
          .getSize(function(d) { return d.size; })
          //.showControls(false)
          //.colorData( \'graduated\', {c1: \'#e8e2ca\', c2: \'#3e6c0a\', l: chartData.data.length} )
          //.colorData( \'class\' )
          .colorData( \'default\' )
      ;

    d3.select(\'#treemap1 svg\')
        .datum(flare_data)
      .transition().duration(500)
        .call(chart);

    return chart;
  });

  // Tree org chart
  nv.addGraph(function() {

    var nodeRenderer = function(d){
      return \'<img src="styleguide/content/charts/img/\'+ d.image +\'" class="rep-avatar" width="32" height="32"><div class="rep-name">\'+ d.name +\'</div><div class="rep-title">\'+ d.title + \'</div>\';
    }

    var chart = nv.models.tree()
          .duration(300)
          .nodeSize({ \'width\': 124, \'height\': 56 })
          .nodeRenderer(nodeRenderer)
          .zoomExtents({ \'min\': 0.25, \'max\': 4 });

    d3.select("#org svg")
        .datum(tree_data)
      .transition().duration(700)
        .call(chart);

    nv.utils.windowResize(function(){ chart.resize(); });

    return chart;
  });

  // Bubble chart
  nv.addGraph(function() {
    var format = d3.time.format("%Y-%m-%d"),
        now = new Date(),
        duration = 12,
        startDate = new Date(now.getFullYear(), (duration === 12 ? 0 : Math.ceil((now.getMonth())/3)-1+duration), 1),
        endDate = new Date(now.getFullYear(), (duration === 12 ? 12 : startDate.getMonth()+3), 0),
        dateRange = [startDate,endDate];

    d3.json("styleguide/content/charts/data/top10_opportunities_preprocessed.json", function(json) {
      var bubble_data = {
            data: d3.nest()
                    .key(function(d){ return d.assigned_user_name;})
                    .entries(
                        json.records
                            .filter(function(d){
                                var oppDate = Date.parse(d.date_closed);
                                return  oppDate >= dateRange[0] && oppDate <= dateRange[1];
                            })
                            .slice(0,10)
                            .map(function(d){
                                return {
                                    id: d.id,
                                    x: d.date_closed,
                                    y: parseInt(d.amount,10),
                                    shape: \'circle\',
                                    account_name: d.account_name,
                                    assigned_user_name: d.assigned_user_name,
                                    sales_stage: d.sales_stage,
                                    probability: d.probability
                                };
                            })
                    ),
            properties: { title: "Top 10 Opportunities", value: json.records.length }
      };

      //chart.colorData( \'graduated\', {c1: \'#e8e2ca\', c2: \'#3e6c0a\', l: bubble_data.data.length} );

      var chart = nv.models.bubbleChart()
          .x(function(d) { return format.parse(d.x) })
          .y(function(d) { return d.y })
          .tooltipContent( function(key, x, y, e, graph) {
              return \'<p>Assigned: <b>\' + key + \'</b></p>\' +
                     \'<p>Amount: <b>$\' +  d3.format(\',.02d\')(e.point.opportunity) + \'</b></p>\' +
                     \'<p>Cloase Date: <b>\' +  d3.time.format(\'%x\')(format.parse(e.point.x)) + \'</b></p>\'
            })
          .showTitle(false)
          .tooltips(true)
          .showLegend(true)
          .colorData( \'graduated\', {c1: \'#d9edf7\', c2: \'#134158\', l: bubble_data.data.length} )
          //.colorData( \'class\' )
          //.colorData( \'default\' )
        ;


      d3.select(\'#bubble svg\')
          .datum(bubble_data_default)
        .transition().duration(500)
          .call(chart);

      nv.utils.windowResize(chart.update);

      return chart;
    });

  });

  // Treemap opportunities chart
  nv.addGraph(function() {
    var chart = nv.models.treemapChart()
          .leafClick(function(d) { alert(\'leaf clicked\'); })
          .getSize(function(d) { return d.value; })
          .showTitle(false)
          .tooltips(false)
          .colorData(\'class\');
    d3.select(\'#treemap2 svg\')
        .datum(parseData(treemap_data_default.records))
      .transition().duration(500)
        .call(chart);
    return chart;
  });

  function parseData (data) {
    var root = {
          name: \'Opportunities\',
          children: [],
          x: 0,
          y: 0,
          dx: parseInt(document.getElementById(\'treemap2\').offsetWidth, 10),
          dy: parseInt(document.getElementById(\'treemap2\').offsetHeight, 10),
          depth: 0,
          colorIndex: \'0root_Opportunities\'
        }
      , colorIndices = [\'0root_Opportunities\']
      , colors = d3.scale.category20().range();

    var today = new Date();
        today.setUTCHours(0,0,0,0);

    var day_ms = 1000*60*60*24
      , d1 = new Date(today.getTime() + 31*day_ms);

    var data = data.filter(function(model) {
      // Filter for 30 days from now.
      var d2 = new Date(model.date_closed || \'1970-01-01\');
      return (d2-d1)/day_ms <= 30;
    }).map(function(d){
      // Include properties to be included in leaves
      return {
        assigned_user_name: d.assigned_user_name,
        sales_stage: d.sales_stage,
        name: d.name,
        amount_usdollar: d.amount_usdollar,
        color: d.color
      };
    });

    data = _.groupBy(data, function(m) {
      return m.assigned_user_name;
    });

    _.each(data, function(value, key, list) {
      list[key] = _.groupBy(value, function(m) {
        return m.sales_stage;
      });
    });

    _.each(data, function(value1, key1) {
      var child = [];
      _.each(value1, function(value2, key2) {
        if (colorIndices.indexOf(\'2oppgroup_\' + key2) === -1) {
          colorIndices.push(\'2oppgroup_\' + key2);
        }
        _.each(value2, function(record) {
          record.className = \'stage_\'+record.sales_stage.toLowerCase().replace(\' \', \'\');
          record.value = parseInt(record.amount_usdollar, 10);
          record.colorIndex = \'2oppgroup_\' + key2;
        });
        child.push({
          name: key2,
          className: \'stage_\'+key2.toLowerCase().replace(\' \', \'\'),
          children: value2,
          colorIndex: \'2oppgroup_\' + key2
        });
      });
      if (colorIndices.indexOf(\'1rep_\' + key1) === -1) {
        colorIndices.push(\'1rep_\' + key1);
      }
      root.children.push({
        name: key1,
        children: child,
        colorIndex: \'1rep_\' + key1
      });
    });

    function accumulate(d) {
      if(d.children) {
        return d.value = d.children.reduce(function(p, v) { return p + accumulate(v); }, 0);
      }
      return d.value;
    }

    accumulate(root);

    colorIndices.sort(d3.ascending());

    //build color indexes
    function setColorIndex(d) {
      var i, l;
      d.colorIndex = colorIndices.indexOf(d.colorIndex);
      if ( d.children )
      {
        l = d.children.length;
        for (i = 0; i < l; i += 1) {
          setColorIndex(d.children[i]);
        }
      }
    }

    setColorIndex(root);

    return root;
  }
</script>
',
      'charts_implementation' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}

    <section id="implementation">

      <div class="page-header">
        <h2>Chart Implementation <small>Patterns for inserting and configuring charts.</small></h2>
      </div>

      <div class="row-fluid">

        <div class="span7">
          <h3>Simple Chart Instance</h3>
          <p>Creating new chart using default parameters and setting data model.</p>
<pre class="prettyprint linenums">
  &lt;div id="chart1"&gt;
    &lt;svg>&lt;/svg&gt;
  &lt;/div&gt;
  var chart = nv.models.multiBarChart();

  d3.select(\'#chart1 svg\')
    .datum(forecast_data_Q1)
    .transition().duration(500).call(chart);
</pre>

          <h3>Overriding Base Event Handlers</h3>
          <p>Default chart handlers (if defined in chart class) can be overridden by passing a function on instantiation.</p>
<pre class="prettyprint linenums">
  var chart = nv.models.multiBarChart()
                .barClick( function(data,e,selection) {
                    d3.select(\'#chart1 svg\')
                      .datum(forecast_data_Q2)
                      .transition().duration(500).call(chart);
                  }
                );
</pre>

          <h3>Setting Parameters</h3>
          <p>Chart parameters can be set by calling public getter/setter functions.</p>

<pre class="prettyprint linenums">
  var chart = nv.models.multiBarChart()
                .x(function(d) { return d.label })
                .y(function(d) { return d.value })
                .margin({top: 0, right: 0, bottom: 15, left: 90})
                .showValues(true)
                .tooltips(true)
                .showControls(false);
</pre>

          <h3>Instantiating Chart</h3>
          <p>A chart can be instantiated with generate and callback functions using NVD3 addGraph function.</p>
<pre class="prettyprint linenums">
    nv.addGraph({
      generate: function() {
          var chart = nv.models.multiBarChart();

          d3.select(\'#chart1 svg\')
            .datum(forecast_data_Q1)
            .transition().duration(500).call(chart);

          nv.utils.windowResize(chart.update);

          return chart;
      },
      callback: function(graph) {
        $(\'#log\').text(\'Chart is loaded\');
      }
    });
</pre>
        </div> <!-- end col -->


        <div class="span5">

          <h3>Standard Parameters</h3>
          <p>This is a set of common chart parameters.</p>
          <div>
<table class="table table-bordered table-striped">
  <thead>
   <tr>
     <th style="width: 100px;">Name</th>
     <th style="width: 50px;">type</th>
     <th style="width: 50px;">default</th>
     <th>description</th>
   </tr>
  </thead>
  <tbody>
   <tr>
     <td>margin</td>
     <td>map</td>
     <td>varies</td>
     <td><code>{top: 20, right: 10, bottom: 40, left: 40}</code></td>
   </tr>
   <tr>
     <td>width | height</td>
     <td>numeric</td>
     <td>null</td>
     <td>set fixed width; null sets chart to expand to containing div</td>
   </tr>
   <tr>
     <td>getX | getY</td>
     <td>function</td>
     <td><code>function(d) { return d.x }</code></td>
     <td>how to get to the x,y property in the datum</td>
   </tr>
   <tr>
     <td>color</td>
     <td>function</td>
     <td><code>nv.utils.defaultColor()</code></td>
     <td>call to function to return color map</td>
   </tr>
   <tr>
     <td>showControls</td>
     <td>boolean</td>
     <td>false</td>
     <td>show chart controls if any</td>
   </tr>
   <tr>
     <td>showLegend</td>
     <td>boolean</td>
     <td>true</td>
     <td>show chart legend</td>
   </tr>
   <tr>
     <td>reduceXTicks | reduceYTicks</td>
     <td>boolean</td>
     <td>true</td>
     <td>if false a tick will show for every data point</td>
   </tr>
   <tr>
     <td>rotateLabels</td>
     <td>boolean</td>
     <td>false</td>
     <td>angle to rotate axis labels</td>
   </tr>
   <tr>
     <td>tooltips</td>
     <td>boolean</td>
     <td>true</td>
     <td>show tooltips over charting elements</td>
   </tr>
   <tr>
     <td>tooltip</td>
     <td>function</td>
     <td><code>function(key, x, y, e, graph) { return \'&lt;h3&gt;\' + key + \' - \' + x + \'&lt;/h3&gt;\' + \'&lt;p&gt;\' +  y + \'&lt;/p&gt;\'}</code></td>
     <td>function that returns an html formated string</td>
   </tr>
   <tr>
     <td>noData</td>
     <td>string</td>
     <td>"No Data Available."</td>
     <td>message to display when no data is available</td>
   </tr>
  </tbody>
</table>
          </div>
        </div> <!-- end col -->

      </div> <!-- end row -->

      <div class="row-fluid">
        <div class="span12">

          <h3>Binding Chart Data with Backbone</h3>
          <p>A chart can be bound to a common data model using Backbone.</p>
<pre class="prettyprint linenums">
  var Chart = Backbone.Model.extend({});
  var Charts = Backbone.Collection.extend({ model: Chart });
  charts = new Charts();
  charts.reset(forecast_data_Q1);

  // The chart view controls the single svg element on the screen
  var ChartsView = Backbone.View.extend({

    initialize: function() {
      // bind to model change events and use enter() to modify the appropriate circle
      var self = this;

      self.collection.bind(
        \'reset\',
        function(model)
        {
          d3.select(self.el)
            .datum( model.models.map( function(d,i){return d.attributes} ) )
            .transition().duration(500).call(self.chart);
        }
      );
    },

    render: function() {
      this.$el.empty();

      this.chart = nv.models.multiBarChart();

      d3.select(this.el)
        .datum( this.collection.models.map( function(d,i){return d.attributes} ) )
        .transition().duration(500).call(this.chart);

      nv.utils.windowResize(this.chart.update);

      return this;
    }

  });

  var chartsView = new ChartsView({ el: $(\'#chart1 svg\'), collection: charts });
  chartsView.render();

  setTimeout(function() { charts.reset( forecast_data_Q2 ); },3000);
</pre>

        </div>
      </div>
    </section>
',
      'components_popovers' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
<!-- Popovers
================================================== -->
<section id="popovers">
  <div class="page-header">
    <h1>Popovers <small>bootstrap-popover.js</small></h1>
  </div>
  <div class="row-fluid">
    <div class="span3 columns">
      <h3>About popovers</h3>
      <p>Add small overlays of content, like those on the iPad, to any element for housing secondary information.</p>
      <p class="muted"><strong>*</strong> Requires <a href="#tooltip">Tooltip</a> to be included</p>
      <p>The bootsrap-popover.js plugin is included in the default build of SugarCRM.</p>
    </div>
    <div class="span9 columns">
      <h2>Example click popover</h2>
      <p>Hover over the button to trigger the popover.</p>
      <div class="well">
        <a href="javacript:void(0)" class="btn btn-danger" rel="popover" title="A Title" data-content="And here\'s some amazing content. It\'s very engaging. right?">click for popover</a>
      </div>
      <hr>
      <h2>Example hover popover</h2>
      <p>Hover over the button to trigger the popover.</p>
      <div class="well">
        <a href="#" class="btn btn-danger" rel="popoverHover" title="A Title" data-content="And here\'s some amazing content. It\'s very engaging. right?">hover for popover</a>
      </div>
      <hr>      <h2>Using bootstrap-popover.js</h2>
      <p>Enable popovers via javascript:</p>
      <pre class="prettyprint linenums">$(\'#example\').popover(options)</pre>
      <h3>Options</h3>
      <table class="table table-bordered table-striped">
        <thead>
         <tr>
           <th style="width: 100px;">Name</th>
           <th style="width: 100px;">type</th>
           <th style="width: 50px;">default</th>
           <th>description</th>
         </tr>
        </thead>
        <tbody>
         <tr>
           <td>animation</td>
           <td>boolean</td>
           <td>true</td>
           <td>apply a css fade transition to the tooltip</td>
         </tr>
         <tr>
           <td>placement</td>
           <td>string</td>
           <td>\'right\'</td>
           <td>how to position the popover - top | bottom | left | right</td>
         </tr>
         <tr>
           <td>selector</td>
           <td>string</td>
           <td>false</td>
           <td>if a selector is provided, tooltip objects will be delegated to the specified targets</td>
         </tr>
         <tr>
           <td>trigger</td>
           <td>string</td>
           <td>\'hover\'</td>
           <td>how tooltip is triggered - hover | focus | manual</td>
         </tr>
         <tr>
           <td>title</td>
           <td>string | function</td>
           <td>\'\'</td>
           <td>default title value if `title` attribute isn\'t present</td>
         </tr>
         <tr>
           <td>content</td>
           <td>string | function</td>
           <td>\'\'</td>
           <td>default content value if `data-content` attribute isn\'t present</td>
         </tr>
         <tr>
           <td>delay</td>
           <td>number | object</td>
           <td>0</td>
           <td>
            <p>delay showing and hiding the popover (ms)</p>
            <p>If a number is supplied, delay is applied to both hide/show</p>
            <p>Object structure is: <code>delay: { show: 500, hide: 100 }</code></p>
           </td>
         </tr>
        </tbody>
      </table>
      <div class="alert alert-info">
        <strong>Heads up!</strong>
        Options for individual popovers can alternatively be specified through the use of data attributes.
      </div>
      <h3>Markup</h3>
      <p>
      For performance reasons, the Tooltip and Popover data-apis are opt in. If you would like to use them just specify a the selector option.
      </p>
      <h3>Methods</h3>
      <h4>$().popover(options)</h4>
      <p>Initializes popovers for an element collection.</p>
      <h4>.popover(\'show\')</h4>
      <p>Reveals an elements popover.</p>
      <pre class="prettyprint linenums">$(\'#element\').popover(\'show\')</pre>
      <h4>.popover(\'hide\')</h4>
      <p>Hides an elements popover.</p>
      <pre class="prettyprint linenums">$(\'#element\').popover(\'hide\')</pre>
      <h4>.popover(\'toggle\')</h4>
      <p>Toggles an elements popover.</p>
      <pre class="prettyprint linenums">$(\'#element\').popover(\'toggle\')</pre>
    </div>
  </div>
</section>
',
      'forms_file' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
<section id="file-uploader">
  <div class="page-header">
    <h1>File uploader <small>custom layouts of field components</small></h1>
  </div>

  <div class="row-fluid control-group">
    <div class="span2">Label</div>
    <div class="span10">
      <span sfuuid="1">
        <label class="file-upload">
          <input type="file" name="uploadfile4" />
        </label>
      </span>
      <p class="help-block"></p></span>
    </div>
  </div>

  <h4><em>styled</em> <small>note: js required, look in application.js near line that has: <code>var uobj = []</code></small></h4>
  <div class="row-fluid control-group">
    <div class="span2">Label</div>
    <div class="span10">
      <span sfuuid="1">
        <span class="upload-field-custom btn">
          <label class="file-upload">
            <span><strong>Upload file</strong></span>
            <input type="file" name="uploadfile14" />
          </label>
        </span>
      </span>
      <p class="help-block"></p></span>
    </div>
  </div>

  <div class="row-fluid control-group">
    <div class="span2">Label</div>
    <div class="span10">
      <span sfuuid="1">
        <span class="upload-field-custom btn">
          <label class="file-upload">
            <span><strong><i class="icon-upload-alt"></i></strong></span>
            <input type="file" name="uploadfile24" />
          </label>
        </span>
      </span>
      <p class="help-block"></p></span>
    </div>
  </div>

  <hr>

  <form id="imageform" method="post" enctype="multipart/form-data" action=\'ajaximage.php\'>
    <div class="row-fluid control-group">
      <div class="span1">Avatar</div>
      <div class="span3">
        <span sfuuid="1">
          <div class="image_field image_edit" style="max-width: 42px; height: 42px; min-height: 42px; line-height: 42px;">
            <label style="line-height: 42px;">
              <span class="image_input">
                <input type="file" name="picture">
              </span>
              <span class="image_btn image_btn_label">Edit</span>
              <span class="image_preview">
                <i class="icon-plus" style="line-height: 32px;"></i>
              </span>
              <span class="image_btn delete icon-trash"></span>
            </label>
          </div>
          <p class="help-block"></p>
        </span>
      </div>
      <div class="span1">Avatar</div>
      <div class="span3">
        <span sfuuid="1">
          <div class="image_field image_edit" style="max-width: 42px; height: 42px; min-height: 42px; line-height: 42px;">
            <label style="line-height: 42px;">
              <span class="image_input">
                <input type="file" name="picture">
              </span>
              <span class="image_btn image_btn_label">Edit</span>
              <span class="image_preview">
                <i class="icon-plus" style="line-height: 32px;"></i>
              </span>
              <span class="image_btn delete icon-remove"></span>
            </label>
          </div>
          <p class="help-block"></p>
        </span>
      </div>
      <div class="span1">Avatar</div>
      <div class="span3 error">
        <span sfuuid="1">
          <div class="image_field image_edit" style="max-width: 42px; height: 42px; min-height: 42px; line-height: 42px;">
            <label style="line-height: 42px;">
              <span class="image_input">
                <input type="file" name="picture">
              </span>
              <span class="image_btn image_btn_label">Edit</span>
              <span class="image_preview">
                <i class="icon-plus" style="line-height: 32px;"></i>
              </span>
            </label>
            <span class="error-tooltip  add-on" rel="tooltip" data-original-title="Invalid file format, only image file can be uploaded."><i class="icon-exclamation-sign"></i></span>
          </div>
          <p class="help-block"></p>
        </span>
      </div>
    </div>
  </form>

</div>

<script>
  /* Custom file upload overrides and avatar widget */
  var uobj = [],
      onUploadChange = function (e) {
        var status = $(this);
        if ( this.value ) {
          var this_container = $(this).parent(\'.file-upload\').parent(\'.upload-field-custom\'),
            value_explode = this.value.split(\'\\\\\'),
            value = value_explode[value_explode.length-1];

          if($(this).closest(\'.upload-field-custom\').hasClass(\'avatar\')===true) { /* hide status for avatars */
            var opts = "hide";
          }

          if(this_container.next(\'.file-upload-status\').length > 0){
            this_container.next(\'.file-upload-status\').remove();
          }
          //this_container.append(\'<span class="file-upload-status">\'+value+\'</span>\');
          $(\'<span class="file-upload-status \'+opts+\' ">\'+value+\'</span>\').insertAfter(this_container);
        }
      },
      onUploadFocus = function () {
        $(this).parent().addClass(\'focus\');
      },
      onUploadBlur = function () {
        $(this).parent().addClass(\'focus\');
      };

  $(\'.upload-field-custom input[type=file]\').each(function() {
    // Bind events
    $(this)
      .bind(\'focus\',onUploadFocus)
      .bind(\'blur\',onUploadBlur)
      .bind(\'change\',onUploadChange);

    // Get label width so we can make button fluid, 12px default left/right padding
    var lbl_width = $(this).parent().find(\'span strong\').width() + 24;
    $(this)
      .parent().find(\'span\').css(\'width\',lbl_width)
      .closest(\'.upload-field-custom\').css(\'width\',lbl_width);

    // Set current state
    onUploadChange.call(this);

    // Minimizes the text input part in IE
    $(this).css(\'width\',\'0\');
  });

  $(\'#photoimg\').live(\'change\', function() {
    $("#preview1").html(\'\');
    $("#preview1").html(\'<span class="loading">Loading...</span>\');
    $("#imageform").ajaxForm({
      target: \'#preview1\'
    }).submit();
  });

  $(\'.preview.avatar\').click(function(e){
      $(this).closest(\'.span10\').find(\'label.file-upload span strong\').trigger(\'click\');
  });
</script>
',
      'base_variables' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}

<!-- VARIABLES
================================================== -->
<section id="variables">
  <div class="page-header">
    <h1>Variables <small>LESS variables, HTML values, and usage guidelines</small></h1>
  </div>

  <h3>Base</h3>
  <div class="row-fluid">
    <div class="span4">
      <h4>Grid system</h4>
      <table class="table table-bordered table-striped">
        <tbody>
          <tr>
            <td class="span2"><code>@gridColumns</code></td>
            <td>12</td>
          </tr>
          <tr>
            <td><code>@gridColumnWidth</code></td>
            <td>60px</td>
          </tr>
          <tr>
            <td><code>@gridGutterWidth</code></td>
            <td>20px</td>
          </tr>
          <tr>
            <td><code>@fluidGridColumnWidth</code></td>
            <td>6.382978723%</td>
          </tr>
          <tr>
            <td><code>@fluidGridGutterWidth</code></td>
            <td>2.127659574%</td>
          </tr>
        </tbody>
      </table>
      <h4>Typography</h4>
      <table class="table table-bordered table-striped">
        <tbody>
          <tr>
            <td class="span2"><code>@baseFontSize</code></td>
            <td>13px</td>
          </tr>
          <tr>
            <td><code>@baseFontFamily</code></td>
            <td><code>Open Sans, sans-serif</code></td>
          </tr>
          <tr>
            <td><code>@baseLineHeight</code></td>
            <td>18px</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="span4">
      <h4>Hyperlinks and Text</h4>
      <table class="table table-bordered table-striped">
        <tbody>
          <tr>
            <td class="span2"></td>
            <td>#595A5C</td>
            <td>Default text color</td>
            <td class="swatch-col"><span class="swatch gray"></span></td>
          </tr>
          <tr>
            <td class="span2"><code>@linkColor</code></td>
            <td>#177EE5</td>
            <td>Default link text color</td>
            <td class="swatch-col"><span class="swatch blue"></span></td>
          </tr>
          <tr>
            <td><code>@linkColorHover</code></td>
            <td>#1571CE</td>
            <td>Default link text hover color</td>
            <td><span class="swatch blueDark"></span></td>
          </tr>
        </tbody>
      </table>
      <h4>Grayscale colors</h4>
      <table class="table table-bordered table-striped">
        <tbody>
          <tr>
            <td class="span2"><code>@black</code></td>
            <td>#000</td>
            <td class="swatch-col"><span class="swatch black"></span></td>
          </tr>
          <tr>
            <td><code>@grayDarker</code></td>
            <td>#222</td>
            <td><span class="swatch grayDarker"></span></td>
          </tr>
          <tr>
            <td><code>@grayDark</code></td>
            <td>#343433</td>
            <td><span class="swatch grayDark"></span></td>
          </tr>
          <tr>
            <td><code>@gray</code></td>
            <td>#595A5C</td>
            <td><span class="swatch gray"></span></td>
          </tr>
          <tr>
            <td><code>@grayLight</code></td>
            <td>#CDCCCB</td>
            <td><span class="swatch grayLight"></span></td>
          </tr>
          <tr>
            <td><code>@grayLighter</code></td>
            <td>#F5F5F5</td>
            <td><span class="swatch grayLighter"></span></td>
          </tr>
          <tr>
            <td><code>@white</code></td>
            <td>#fff</td>
            <td><span class="swatch swatch-bordered white"></span></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="span4">
      <h4>Accent colors</h4>
      <table class="table table-bordered table-striped">
        <tbody>
          <tr>
            <td class="span2"><code>@blueLight</code></td>
            <td>#71B1F1</td>
            <td class="swatch-col"><span class="swatch blueLight"></span></td>
          </tr>
          <tr>
            <td class="span2"><code>@blue</code></td>
            <td>#177EE5</td>
            <td class="swatch-col"><span class="swatch blue"></span></td>
          </tr>
          <tr>
            <td class="span2"><code>@blueDark</code></td>
            <td>#1571CE</td>
            <td class="swatch-col"><span class="swatch blueDark"></span></td>
          </tr>
          <tr>
            <td><code>@green</code></td>
            <td>#3FB300</td>
            <td><span class="swatch green"></span></td>
          </tr>
          <tr>
            <td><code>@red</code></td>
            <td>#E61718</td>
            <td><span class="swatch red"></span></td>
          </tr>
          <tr>
            <td><code>@yellow</code></td>
            <td>#EAE82F</td>
            <td><span class="swatch yellow"></span></td>
          </tr>
          <tr>
            <td><code>@orange</code></td>
            <td>#F34F0C</td>
            <td><span class="swatch orange"></span></td>
          </tr>
          <tr>
            <td><code>@pink</code></td>
            <td>#CC147C</td>
            <td><span class="swatch pink"></span></td>
          </tr>
          <tr>
            <td><code>@purple</code></td>
            <td>#7D12B2</td>
            <td><span class="swatch purple"></span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div> <!-- /row -->

  <h3>Components</h3>
  <div class="row-fluid">
    <div class="span4">
      <h4>Buttons</h4>
      <table class="table table-bordered table-striped">
        <tbody>
          <tr>
            <td class="span3"><code>@primaryButtonBackground</code></td>
            <td><code>@linkColor</code></td>
            <td class="swatch-col"><span class="swatch btn btn-primary"></span></td>
          </tr>
          <tr>
            <td class="span3"><code>.btn-success</code></td>
            <td><code></code></td>
            <td class="swatch-col"><span class="swatch btn btn-success"></span></td>
          </tr>
          <tr>
            <td class="span3"><code>.btn-danger</code></td>
            <td><code></code></td>
            <td class="swatch-col"><span class="swatch btn btn-danger"></span></td>
          </tr>
          <tr>
            <td class="span3"><code>.btn-warning</code></td>
            <td><code></code></td>
            <td class="swatch-col"><span class="swatch btn btn-warning"></span></td>
          </tr>
          <tr>
            <td class="span3"><code>.btn</code></td>
            <td><code></code></td>
            <td class="swatch-col"><span class="swatch btn"></span></td>
          </tr>
        </tbody>
      </table>
      <h4>Forms</h4>
      <table class="table table-bordered table-striped">
        <tbody>
          <tr>
            <td class="span3"><code>@placeholderText</code></td>
            <td><code>@grayLight</code></td>
            <td class="swatch-col"><span class="swatch placeholderText"></span></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="span4">
      <h4>Form states and alerts</h4>
      <table class="table table-bordered table-striped">
        <tbody>
          <tr>
            <td class="span3"><code>@warningText</code></td>
            <td>#6E5E0C</td>
            <td class="swatch-col"><span class="swatch warningText"></span></td>
          </tr>
          <tr>
            <td><code>@warningBackground</code></td>
            <td>#FCF8E3</td>
            <td><span class="swatch warningBackground"></span></td>
          </tr>
          <tr>
            <td><code>@errorText</code></td>
            <td>#4D1E1E</td>
            <td><span class="swatch errorText"></span></td>
          </tr>
          <tr>
            <td><code>@errorBackground</code></td>
            <td>#f2dede</td>
            <td><span class="swatch errorBackground"></span></td>
          </tr>
          <tr>
            <td><code>@successText</code></td>
            <td>#28471C</td>
            <td><span class="swatch successText"></span></td>
          </tr>
          <tr>
            <td><code>@successBackground</code></td>
            <td>#dff0d8</td>
            <td><span class="swatch successBackground"></span></td>
          </tr>
          <tr>
            <td><code>@infoText</code></td>
            <td>#134158</td>
            <td><span class="swatch infoText"></span></td>
          </tr>
          <tr>
            <td><code>@infoBackground</code></td>
            <td>#d9edf7</td>
            <td><span class="swatch infoBackground"></span></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="span4">
      <h4>Navbar</h4>
      <table class="table table-bordered table-striped">
        <tbody>
          <tr>
            <td class="span3"><code>@navbarHeight</code></td>
            <td>44px</td>
            <td class="swatch-col"></td>
          </tr>
          <tr>
            <td><code>@navbarBackground</code></td>
            <td><code>@grayDarker</code></td>
            <td><span class="swatch grayDarker"></span></td>
          </tr>
          <tr>
            <td><code>@navbarBackgroundHighlight</code></td>
            <td><code>@grayDark</code></td>
            <td><span class="swatch grayDark"></span></td>
          </tr>
          <tr>
            <td><code>@navbarText</code></td>
            <td><code>@grayLight</code></td>
            <td><span class="swatch grayLight"></span></td>
          </tr>
          <tr>
            <td><code>@navbarLinkColor</code></td>
            <td><code>@grayLight</code></td>
            <td><span class="swatch grayLight"></span></td>
          </tr>
          <tr>
            <td><code>@navbarLinkColorHover</code></td>
            <td><code>@white</code></td>
            <td><span class="swatch swatch-bordered white"></span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div><!-- /row -->

</section>
',
      'base_typography' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}

<!-- Typography
================================================== -->
<section id="typography">
  <div class="page-header">
    <h1>Typography <small>Headings, paragraphs, lists, and other inline type elements</small></h1>
  </div>
  <h2>Family</h2>
  <div class="row-fluid">
    <div class="span4">
      <h3>Two fonts</h3>
      <p>There should not typically be more than two types of font families used across our properties.  The heading font applied to h1,h2,h3,h4 and then the main body font. </p>
    </div>
    <div class="span4">
      <h3>Font Demo</h3>
      <h4>Headings (h1-h4) - Open Sans (400 weight)</h4>
      <p>Normal - Open Sans (400 weight)</p>
      <p><strong>600 weight is available as well</strong></p>
    </div>
  </div>

  <h2>Headings &amp; body copy</h2>

  <!-- Headings & Paragraph Copy -->
  <div class="row-fluid">
    <div class="span4">
      <h3>Typographic scale</h3>
      <p>The entire typographic grid is based on two variables in our variables.less file: <code>@baseFontSize</code> and <code>@baseLineHeight</code>. The first is the base font-size used throughout and the second is the base line-height.</p>
      <p>We use those variables, and some math, to create the margins, paddings, and line-heights of all our type and more.</p>
    </div>
    <div class="span4">
      <h3>Example body text</h3>
      <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
      <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui.</p>
    </div>
    <div class="span4">
      <div class="well">
        <h1>h1. Heading 1</h1>
        <h2>h2. Heading 2</h2>
        <h3>h3. Heading 3</h3>
        <h4>h4. Heading 4</h4>
        <h5>h5. Heading 5</h5>
        <h6>h6. Heading 6</h6>
      </div>
    </div>
  </div>

  <h2 id="4jfAel">Usage of ellipsis for long text strings</h2>
  <div class="row-fluid">
    <div class="span8">
      <p>Ellipsis&nbsp;&mdash; a series of dots that usually indicate an intentional omission of a word, sentence or whole section from the original text being quoted...</p>
      <p>To avoid wrapping a string of text such as label, heading, etc, ellipsis should be used in conjunction with <a href="widgets.html#tooltips">tooltips</a> or <a href="widgets.html#popovers">popovers</a> to let user still see what the full text string says.</p>

      <h4>General markup</h4>
      <pre class="prettyprint linenums">
      &lt;p class="ellipsis_inline" rel="tooltip" data-original-title="p. This is a very long paragraph that need to be truncated"&gt;
        p. This is a very long paragraph that need to be truncated
      &lt;/p&gt;
      </pre>
      <h4>Notes</h4>
      <p>Enclose string that is to be truncated in an HTML element with class <code>ellipsis_inline</code>. This element is to be displayed as a block with its width attribute being optional as it is being inherited from its parent. If any siblings are to be displayed on the same line with truncated text, ensure they\'re float\'ing right or left. See examples in the right column.</p>
    </div>

    <div class="span4">
      <div class="well">
        <h2 class="ellipsis_inline" rel="tooltip" data-original-title="h2. This is a very long heading that need to be truncated 2">h2. This is a very long heading that need to be truncated 2</h2>
        <h3 class="ellipsis_inline" rel="tooltip" data-original-title="h3. This is a very long heading that need to be truncated 3">h3. This is a very long heading that need to be truncated 3</h3>
        <p class="ellipsis_inline" rel="tooltip" data-original-title="p. This is a very long paragraph that need to be truncated">p. This is a very long paragraph that need to be truncated</p>
        <div class="ellipsis_inline" rel="tooltip" data-original-title="div. This is a very long div that need to be truncated">span. This is a very long span that need to be truncated</div>
      </div>
      <div class="well">
        <div class="btn-group pull-right">
          <a href="#" class="btn btn-small btn-primary" style="top:-5px">Primary action</a>
        </div>
        <div class="ellipsis_inline" rel="tooltip" data-original-title="div. This is a very long div that need to be truncated">div. This is a very long div that need to be truncated</div>
        <hr>
        <div class="pull-left">
          <i class="icon-warning-sign" style="color:#D14"></i>&nbsp;
        </div>
        <div class="btn-group pull-right">
          <a href="#" class="btn btn-small btn-primary" style="top:-5px">Primary action</a>
        </div>
        <div class="ellipsis_inline" rel="tooltip" data-original-title="div. This is a very long div that need to be truncated">div. This is a very long div that need to be truncated</div>
        <hr>
        <div class="pull-left">
          <i class="icon-warning-sign" style="color:#D14"></i> <i class="icon-headphones"></i> <i class="icon-chevron-right"></i>&nbsp;
        </div>
        <div class="btn-group pull-right">
          <a href="#" class="btn btn-small btn-primary" style="top:-5px">Primary action</a>
        </div>
        <div class="ellipsis_inline" rel="tooltip" data-original-title="div. This is a very long div that need to be truncated">div. This is a very long div that need to be truncated</div>
        <hr>
        <div class="row-fluid">
          <div class="span3" style="border:1px dotted #ccc">
            <div class="ellipsis_inline" rel="tooltip" data-original-title="div. This is a very long div that need to be truncated">div. This is a very long div that need to be truncated</div>
          </div>
          <div class="span3" style="border:1px dotted #ccc">
            <div class="ellipsis_inline" rel="tooltip" data-original-title="div. This is a very long div that need to be truncated">div. This is a very long div that need to be truncated</div>
          </div>
          <div class="span6" style="border:1px dotted #ccc">
            <div class="ellipsis_inline" rel="tooltip" data-original-title="div. This is a very long div that need to be truncated">div. This is a very long div that need to be truncated</div>
          </div>
        </div>
        <hr>
        <div class="row-fluid control-group">
          <div class="span3">
            <label class="control-label ellipsis_inline" for="name" rel="tooltip" data-original-title="Label of the field">Label of the field</label>
          </div>
          <div class="span9">
            <span sfuuid="1">
              <input type="text" name="name" id="name" value="" class="input-medium" >
              <p class="help-block">
              </p>
            </span>
            <p class="help-block">
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Misc Elements -->
  <h2>Emphasis, address, and abbreviation</h2>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Element</th>
        <th>Usage</th>
        <th>Optional</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <code>&lt;strong&gt;</code>
        </td>
        <td>
          For emphasizing a snippet of text with <strong>important</strong>
        </td>
        <td>
          <span class="muted">None</span>
        </td>
      </tr>
      <tr>
        <td>
          <code>&lt;em&gt;</code>
        </td>
        <td>
          For emphasizing a snippet of text with <em>stress</em>
        </td>
        <td>
          <span class="muted">None</span>
        </td>
      </tr>
      <tr>
        <td>
          <code>&lt;abbr&gt;</code>
        </td>
        <td>
          Wraps abbreviations and acronyms to show the expanded version on hover
        </td>
        <td>
          Include optional <code>title</code> for expanded text
        </td>
      </tr>
      <tr>
        <td>
          <code>&lt;address&gt;</code>
        </td>
        <td>
          For contact information for its nearest ancestor or the entire body of work
        </td>
        <td>
          Preserve formatting by ending all lines with <code>&lt;br&gt;</code>
        </td>
      </tr>
    </tbody>
  </table>

  <div class="row-fluid">
    <div class="span4">
      <h3>Using emphasis</h3>
      <p><a href="#">Fusce dapibus</a>, <strong>tellus ac cursus commodo</strong>, <em>tortor mauris condimentum nibh</em>, ut fermentum massa justo sit amet risus. Maecenas faucibus mollis interdum. Nulla vitae elit libero, a pharetra augue.</p>
      <p><strong>Note:</strong> Feel free to use <code>&lt;b&gt;</code> and <code>&lt;i&gt;</code> in HTML5, but their usage has changed a bit. <code>&lt;b&gt;</code> is meant to highlight words or phrases without conveying additional importance while <code>&lt;i&gt;</code> is mostly for voice, technical terms, etc.</p>
    </div>
    <div class="span4">
      <h3>Example addresses</h3>
      <p>Here are two examples of how the <code>&lt;address&gt;</code> tag can be used:</p>
      <address>
        <strong>SugarCRM, Inc.</strong><br>
        33 Some Ave, Suite 600<br>
        San Francisco, CA 94107<br>
        <abbr title="Phone">P:</abbr> (123) 456-7890
      </address>
      <address>
        <strong>Full Name</strong><br>
        <a href="mailto:#">first.last@gmail.com</a>
      </address>
    </div>
    <div class="span4">
      <h3>Example abbreviations</h3>
      <p>Abbreviations are styled with uppercase text and a light dotted bottom border. They also have a help cursor on hover so users have extra indication something will be shown on hover.</p>
      <p><abbr title="HyperText Markup Language">HTML</abbr> is the best thing since sliced bread.</p>
      <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
    </div>
  </div>


  <!-- Blockquotes -->
  <h2>Blockquotes</h2>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Element</th>
        <th>Usage</th>
        <th>Optional</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <code>&lt;blockquote&gt;</code>
        </td>
        <td>
          Block-level element for quoting content from another source
        </td>
        <td>
          <p>Add <code>cite</code> attribute for source URL</p>
          Use <code>.pull-left</code> and <code>.pull-right</code> classes for floated options
        </td>
      </tr>
      <tr>
        <td>
          <code>&lt;small&gt;</code>
        </td>
        <td>
          Optional element for adding a user-facing citation, typically an author with title of work
        </td>
        <td>
          Place the <code>&lt;cite&gt;</code> around the title or name of source
        </td>
      </tr>
    </tbody>
  </table>
  <div class="row-fluid">
    <div class="span4">
      <p>To include a blockquote, wrap <code>&lt;blockquote&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr> as the quote. For straight quotes we recommend a <code>&lt;p&gt;</code>.</p>
      <p>Include an optional <code>&lt;small&gt;</code> element to cite your source and you\'ll get an em dash <code>&amp;mdash;</code> before it for styling purposes.</p>
    </div>
    <div class="span8">
<pre class="prettyprint linenums">
&lt;blockquote&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis.&lt;/p&gt;
  &lt;small&gt;Someone famous&lt;/small&gt;
&lt;/blockquote&gt;
</pre>
    </div>
  </div><!--/row-->

  <h3>Example blockquotes</h3>
  <div class="row-fluid">
    <div class="span6">
      <p>Default blockquotes are styled as such:</p>
      <blockquote>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis.</p>
        <small>Someone famous in <cite title="">Body of work</cite></small>
      </blockquote>
    </div>
    <div class="span6">
      <p>To float your blockquote to the right, add <code>class="pull-right"</code>:</p>
      <blockquote class="pull-right">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis.</p>
        <small>Someone famous in <cite title="">Body of work</cite></small>
      </blockquote>
    </div>
  </div>


  <!-- Lists -->
  <h2>Lists</h2>
  <div class="row-fluid">
    <div class="span3">
      <h4>Unordered</h4>
      <p><code>&lt;ul&gt;</code></p>
      <ul>
        <li>Lorem ipsum dolor sit amet</li>
        <li>Consectetur adipiscing elit</li>
        <li>Integer molestie lorem at massa</li>
        <li>Facilisis in pretium nisl aliquet</li>
        <li>Nulla volutpat aliquam velit
          <ul>
            <li>Phasellus iaculis neque</li>
            <li>Purus sodales ultricies</li>
            <li>Vestibulum laoreet porttitor sem</li>
            <li>Ac tristique libero volutpat at</li>
          </ul>
        </li>
        <li>Faucibus porta lacus fringilla vel</li>
        <li>Aenean sit amet erat nunc</li>
        <li>Eget porttitor lorem</li>
      </ul>
    </div>
    <div class="span3">
      <h4>Unstyled</h4>
      <p><code>&lt;ul class="unstyled"&gt;</code></p>
      <ul class="unstyled">
        <li>Lorem ipsum dolor sit amet</li>
        <li>Consectetur adipiscing elit</li>
        <li>Integer molestie lorem at massa</li>
        <li>Facilisis in pretium nisl aliquet</li>
        <li>Nulla volutpat aliquam velit
          <ul>
            <li>Phasellus iaculis neque</li>
            <li>Purus sodales ultricies</li>
            <li>Vestibulum laoreet porttitor sem</li>
            <li>Ac tristique libero volutpat at</li>
          </ul>
        </li>
        <li>Faucibus porta lacus fringilla vel</li>
        <li>Aenean sit amet erat nunc</li>
        <li>Eget porttitor lorem</li>
      </ul>
    </div>
    <div class="span3">
      <h4>Ordered</h4>
      <p><code>&lt;ol&gt;</code></p>
      <ol>
        <li>Lorem ipsum dolor sit amet</li>
        <li>Consectetur adipiscing elit</li>
        <li>Integer molestie lorem at massa</li>
        <li>Facilisis in pretium nisl aliquet</li>
        <li>Nulla volutpat aliquam velit</li>
        <li>Faucibus porta lacus fringilla vel</li>
        <li>Aenean sit amet erat nunc</li>
        <li>Eget porttitor lorem</li>
      </ol>
    </div>
    <div class="span3">
      <h4>Description</h4>
      <p><code>&lt;dl&gt;</code></p>
      <dl>
        <dt>Description lists</dt>
        <dd>A description list is perfect for defining terms.</dd>
        <dt>Euismod</dt>
        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
        <dt>Malesuada porta</dt>
        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
      </dl>
    </div>
  </div><!-- /row -->
</section>
',
      'forms_select2' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
<!-- Form inputs
================================================== -->
<script src="styleguide/content/js/chart-utils.js"></script>
<script>
  function getSelect2Constructor($select) {
    var _ctor = {};
    _ctor.minimumResultsForSearch = 7;
    _ctor.dropdownCss = {};
    _ctor.dropdownCssClass = \'\';
    _ctor.containerCss = {};
    _ctor.containerCssClass = \'\';
    if ( $select.hasClass(\'narrow\') ) {
      _ctor.dropdownCss.width = \'auto\';
      _ctor.dropdownCssClass = \'select2-narrow \';
      _ctor.containerCss.width = \'75px\';
      _ctor.containerCssClass = \'select2-narrow\';
      _ctor.width = \'off\';
    }
    if ( $select.hasClass(\'inherit-width\') ) {
      _ctor.dropdownCssClass = \'select2-inherit-width \';
      _ctor.containerCss.width = \'100%\';
      _ctor.containerCssClass = \'select2-inherit-width\';
      _ctor.width = \'off\';
    }
    return _ctor;
  }
</script>

<section id="select2">
  <div class="page-header">
    <h1>Select2 <small>a jQuery based replacement for select boxes. It supports searching, remote data sets, and infinite scrolling of results. <a href="http://ivaynberg.github.com/select2/" target="_blank"><i class="icon-book"></i> Docs</a> </small></h1>
  </div>

  <div class="row-fluid">
    <div class="span12">
      <h2>Single Select</h2>
    </div>
  </div>

  <div class="row-fluid">
    <div class="span12 padded">
      <h3>Basic Example</h3>
      <select name="priority" class="select2" data-placeholder="Choose a priority...">
        <option></option>
        <option value="Urgent">Urgent</option>
        <option value="High">High</option>
        <option value="Medium">Medium</option>
        <option disabled value="Low">Low</option>
      </select>
      <script>
        $(\'select[name="priority"]\').select2({minimumResultsForSearch:7});
      </script>
    </div>
  </div>

  <div class="row-fluid">
    <div class="span6">
<pre class="prettyprint linenums" style="margin-bottom: 9px;">
 &lt;select class="select2"
      data-placeholder="Choose a priority..."&gt;
  &lt;option&gt;&lt;/option&gt;
  &lt;option value="Urgent"&gt;Urgent&lt;/option&gt;
  ...
&lt;/select&gt;
&lt;script&gt;
  var $select = $(\'select.select2\');
  $select.select2();
&lt;/script&gt;
</pre>
    </div>
    <div class="span6">
      <p>Select2 has many of the same features as Chosen with greater flexibility for customization. Configuration options are passed to Select2 in a constructor object <code>$select.select2({allowClear:true})</code>. All of the configuration options can be found at the <a href="http://ivaynberg.github.com/select2/">Select2 homepage</a>.</p>
      <p>Select2 creates two distinct containers for the select input elements. The first is the <b>container</b> that wraps the original form control and the stylized input divs. The second is the <b>dropdown</b> that wraps the select options and option filter input control.</p>
      <p class="alert alert-info"><b>Note:</b> Any classes that are assigned to the original select input will be added to the container and dropdown divs.</p>
    </div>
  </div>

  <!-- ==================== -->

  <div class="row-fluid">
    <div class="span12 padded">
      <h3>Retreive Selected Value</h3>
      <select id="priority" data-placeholder="Choose a priority...">
        <option></option>
        <option value="Urgent">Urgent</option>
        <option value="High">High</option>
        <option value="Medium">Medium</option>
        <option disabled value="Low">Low</option>
      </select>
      <a href="#" class="btn btn-primary" onclick="$(\'#priority\').select2(\'val\',\'High\');return false;">Set Value</a>
      <a href="#" class="btn btn-primary" onclick="alert($(\'#priority\').select2(\'val\'));return false">Get Value</a>
      <script>
        $(\'#priority\').select2({minimumResultsForSearch:7, width:\'200px\'});
      </script>
    </div>
  </div>

  <div class="row-fluid">
    <div class="span6">
<pre class="prettyprint linenums" style="margin-bottom: 9px;">
&lt;a href="#" class="btn btn-primary" onclick="alert($(\'#priority\').select2(\'val,\'High\')"&gt;Set Value&lt;/a&gt;
&lt;a href="#" class="btn btn-primary" onclick="alert($(\'#priority\').select2(\'val\'))"&gt;Get Value&lt;/a&gt;
&lt;script&gt;
  $(\'#priority\').select2({width:\'200px\'});
&lt;/script&gt;
</pre>
    </div>
    <div class="span6">
      <p>The selected value of a Select2 input can be retrieved by passing the "val" parameter <code>$select.select2(\'val\')</code> and assigned by passing the "val" parameter and a "value" <code>$select.select2(\'val\',\'CA\')</code></p>
      <p>The width of the Select2 container can be defined explicitly, or ...</p>
    </div>
  </div>

  <!-- ==================== -->

  <div class="row-fluid">
    <div class="span12 padded">
      <h3>Loading results from json</h3>
     <input type="hidden" class="bigdrop" id="e6" style="width:600px"/></p>
      <script>
      $("#e6").select2({
          placeholder: "Search for a movie",
          minimumInputLength: 1,
          ajax: { // instead of writing the function to execute the request we use Select2\'s convenient helper
              url: "styleguide/content/select2.json",
              dataType: \'json\',
              data: function (term, page) {
                return {q:term}
              },
              results: function (data, page) { // parse the results into the format expected by Select2.
                  // since we are using custom formatting functions we do not need to alter remote JSON data

                  return {results: data.movies};
              }
          },
          formatResult: function(m) {return m.title;},
          formatSelection: function(m) {return m.title;},
      });
      </script>
    </div>
  </div>
  <hr>

  <!-- ==================== -->

  <div class="row-fluid">
    <div class="span12 padded">
      <h3>Full Width Dynamic</h3>
      <select id="priority2" class="select2 inherit-width" data-placeholder="Choose a priority...">
        <option></option>
        <option value="Urgent">Urgent</option>
        <option value="High">High</option>
        <option value="Medium">Medium</option>
        <option disabled value="Low">Low</option>
      </select>
      <script>
        var $this = $(\'#priority2\')
          , ctor = getSelect2Constructor($this);
        $this.select2( ctor );
      </script>
    </div>
  </div>

  <div class="row-fluid">
    <div class="span6">

<pre class="prettyprint linenums" style="margin-bottom: 9px;">
 &lt;select
      class="select2 inherit-width"
      data-placeholder="Choose a priority..."&gt;
  &lt;option&gt;&lt;/option&gt;
  &lt;option value="Urgent"&gt;Urgent&lt;/option&gt;
  ...
&lt;/select&gt;
&lt;script&gt;
  var $this = $(\'#priority2\')
    , ctor = getSelect2Constructor($this);
  $this.select2( ctor );
&lt;/script&gt;
</pre>

      <div class="padded">
        <h3>Small Select Container Width</h3>
        <select id="state" class="select2 narrow" tabindex="3" data-placeholder="State...">
          <option></option>
          <option value="NC">North Carolina</option>
          <option value="PA">Pennsylvania</option>
          <option value="WA">Washington</option>
          <option value="CA">California</option>
        </select>
        <script>
          function formatStateSelection (state) {
            return state.id;
          }

          var $this = $(\'#state\')
            , ctor = getSelect2Constructor($this);
          ctor.formatSelection = formatStateSelection;

          $this.select2( ctor );
        </script>
      </div>

<pre class="prettyprint linenums" style="margin-bottom: 9px;">
 &lt;select
      id="state" class="select2 narrow"
      data-placeholder="Choose a priority..."&gt;
  &lt;option&gt;&lt;/option&gt;
  &lt;option value="Urgent"&gt;Urgent&lt;/option&gt;
  ...
&lt;/select&gt;
&lt;script&gt;
  function formatStateSelection (state) {
    return state.id;
  }

  var $select = $(\'#state\')
    , ctor = getSelect2Constructor($this);
      ctor.formatSelection = formatStateSelection;

  $select.select2( ctor );
&lt;/script&gt;
</pre>

    </div>

    <div class="span6">
      <p>We can leverage custom SugarCRM classes to control the select container width. One is <b>inherit-width</b> which expands the container and dropdown to 100% of the parent div of the original select input. The other is <b>narrow</b> which collapses the width of the Select2 container but expands the dropdown to allow for auto width of the selection options.</p>
      <p>These classes are not part of Select2 but rather used by a custom function to set up four properties in the Select2 constructor: <code>dropdownCss</code>, <code>dropdownCssClass</code>, <code>containerCss</code>, <code>containerCssClass</code>. Be careful about setting the width of the dropdown to 100% because it will grow to 100% of the page since it is attached directly to the body. Feel free to add any needed styling to the constructor function. The default select2-inherit-width and select2-narrow as defined in the select2.less file should cover most cases.</p>
<pre class="prettyprint linenums" style="margin-bottom: 9px;">
&lt;script&gt;
  function getSelect2Constructor($select) {
    var _ctor = {};
    _ctor.minimumResultsForSearch = 7;
    _ctor.dropdownCss = {};
    _ctor.dropdownCssClass = \'\';
    _ctor.containerCss = {};
    _ctor.containerCssClass = \'\';
    if ( $select.hasClass(\'narrow\') ) {
      _ctor.dropdownCss.width = \'auto\';
      _ctor.dropdownCssClass = \'select2-narrow \';
      _ctor.containerCss.width = \'75px\';
      _ctor.containerCssClass = \'select2-narrow\';
      _ctor.width = \'off\';
    }
    if ( $select.hasClass(\'inherit-width\') ) {
      _ctor.dropdownCssClass = \'select2-inherit-width \';
      _ctor.containerCss.width = \'100%\';
      _ctor.containerCssClass = \'select2-inherit-width\';
      _ctor.width = \'off\';
    }
    return _ctor;
  }
&lt;/script&gt;
</pre>
    </div>

  </div>

  <!-- ==================== -->

  <div class="row-fluid">
    <div class="span12 padded">
      <h3>Deselect &amp; Dropdown Fitler</h3>
      <select id="states3" class="select2" data-placeholder="Select a state...">
<option></option>
<option value="AL">Alabama</option>
<option value="AK">Alaska</option>
<option value="AZ">Arizona</option>
<option value="AR">Arkansas</option>
<option value="CA">California</option>
<option value="CO">Colorado</option>
<option value="CT">Connecticut</option>
<option value="DE">Delaware</option>
<option value="DC">District Of Columbia</option>
<option value="FL">Florida</option>
<option value="GA">Georgia</option>
<option value="HI">Hawaii</option>
<option value="ID">Idaho</option>
<option value="IL">Illinois</option>
<option value="IN">Indiana</option>
<option value="IA">Iowa</option>
<option value="KS">Kansas</option>
<option value="KY">Kentucky</option>
<option value="LA">Louisiana</option>
<option value="ME">Maine</option>
<option value="MD">Maryland</option>
<option value="MA">Massachusetts</option>
<option value="MI">Michigan</option>
<option value="MN">Minnesota</option>
<option value="MS">Mississippi</option>
<option value="MO">Missouri</option>
<option value="MT">Montana</option>
<option value="NE">Nebraska</option>
<option value="NV">Nevada</option>
<option value="NH">New Hampshire</option>
<option value="NJ">New Jersey</option>
<option value="NM">New Mexico</option>
<option value="NY">New York</option>
<option value="NC">North Carolina</option>
<option value="ND">North Dakota</option>
<option value="OH">Ohio</option>
<option value="OK">Oklahoma</option>
<option value="OR">Oregon</option>
<option value="PA">Pennsylvania</option>
<option value="RI">Rhode Island</option>
<option value="SC">South Carolina</option>
<option value="SD">South Dakota</option>
<option value="TN">Tennessee</option>
<option value="TX">Texas</option>
<option value="UT">Utah</option>
<option value="VT">Vermont</option>
<option value="VA">Virginia</option>
<option value="WA">Washington</option>
<option value="WV">West Virginia</option>
<option value="WI">Wisconsin</option>
<option value="WY">Wyoming</option>
      </select>
      <script>
        $(\'#states3\').select2({width:\'200px\', minimumResultsForSearch:7, allowClear:true});
      </script>
    </div>
  </div>

  <div class="row-fluid">
    <div class="span6">
<pre class="prettyprint linenums" style="margin-bottom: 9px;">
&lt;script&gt;
  $(\'#states3\').select2({
    minimumResultsForSearch:7,
    allowClear:true
  });
&lt;/script&gt;
</pre>
    </div>
    <div class="span6">
      <p>To enable a deselect "x" icon to reset the Select2 control, pass the <code>allowClear</code> property in the constructor.</p>
      <p>The <code>minimumResultsForSearch</code> property is used to prevent a select option filter input if the number of select options is less than the number set.</p>
    </div>
  </div>

  <!-- ==================== -->

  <div class="row-fluid">
    <div class="span12 padded">
      <h3>Select with Hidden Input</h3>
      <input type="hidden" id="s2_hidden" class="select2 inherit-width">
      <script>
        var $this = $(\'#s2_hidden\')
          , ctor = getSelect2Constructor($this);
        ctor.data = [{id:0,text:\'enhancement\'},{id:1,text:\'bug\'},{id:2,text:\'duplicate\'},{id:3,text:\'invalid\'},{id:4,text:\'wontfix\'}];
        ctor.placeholder = "Select a issue type...";
        $this.select2( ctor );
      </script>
    </div>
  </div>

  <div class="row-fluid">
    <div class="span6">
<pre class="prettyprint linenums" style="margin-bottom: 9px;">
&lt;input id="s2_hidden" class="select2 inherit-width"&gt;

&lt;script&gt;
  var $this = $(\'#s2_hidden\')
    , ctor = getSelect2Constructor($this);
  ctor.data = [{id:0,text:\'enhancement\'},{id:1,text:\'bug\'},{id:2,text:\'duplicate\'},{id:3,text:\'invalid\'},{id:4,text:\'wontfix\'}];
  ctor.placeholder = "Select a issue type...";
  $this.select2( ctor );
&lt;/script&gt;
</pre>
    </div>
    <div class="span6">
      <p>It is possible to use a <code>&lt;input type="hidden"&gt;</code> field as long as you pass data in the constructor. This example also shows the use of the <code>placeholder</code> property in the constructor.</p>
    </div>
  </div>

  <!-- ==================== -->
<!--
  <div class="row-fluid">
    <div class="span12 padded">
      <h3>Deselect &amp; Dropdown Fitler</h3>
      <select id="states4" class="select2" data-placeholder="Select a state...">
        <option></option>
        <option value="AL">Alabama</option>
        <option value="AK">Alaska</option>
        <option value="AZ">Arizona</option>
        <option value="AR">Arkansas</option>
        <option value="CA">California</option>
        <option value="CO">Colorado</option>
        <option value="CT">Connecticut</option>
        <option value="DE">Delaware</option>
        <option value="DC">District Of Columbia</option>
        <option value="FL">Florida</option>
        <option value="GA">Georgia</option>
        <option value="HI">Hawaii</option>
        <option value="ID">Idaho</option>
        <option value="IL">Illinois</option>
        <option value="IN">Indiana</option>
        <option value="IA">Iowa</option>
        <option value="KS">Kansas</option>
        <option value="KY">Kentucky</option>
        <option value="LA">Louisiana</option>
        <option value="ME">Maine</option>
        <option value="MD">Maryland</option>
        <option value="MA">Massachusetts</option>
        <option value="MI">Michigan</option>
        <option value="MN">Minnesota</option>
        <option value="MS">Mississippi</option>
        <option value="MO">Missouri</option>
        <option value="MT">Montana</option>
        <option value="NE">Nebraska</option>
        <option value="NV">Nevada</option>
        <option value="NH">New Hampshire</option>
        <option value="NJ">New Jersey</option>
        <option value="NM">New Mexico</option>
        <option value="NY">New York</option>
        <option value="NC">North Carolina</option>
        <option value="ND">North Dakota</option>
        <option value="OH">Ohio</option>
        <option value="OK">Oklahoma</option>
        <option value="OR">Oregon</option>
        <option value="PA">Pennsylvania</option>
        <option value="RI">Rhode Island</option>
        <option value="SC">South Carolina</option>
        <option value="SD">South Dakota</option>
        <option value="TN">Tennessee</option>
        <option value="TX">Texas</option>
        <option value="UT">Utah</option>
        <option value="VT">Vermont</option>
        <option value="VA">Virginia</option>
        <option value="WA">Washington</option>
        <option value="WV">West Virginia</option>
        <option value="WI">Wisconsin</option>
        <option value="WY">Wyoming</option>
      </select>
      <script>
        $(\'#states4\').select2({width:\'200px\', minimumResultsForSearch:1000, dropdownCssClass: \'select2-drop-bootstrap\'});
      </script>
    </div>
  </div>

  <div class="row-fluid">
    <div class="span6">
<pre class="prettyprint linenums" style="margin-bottom: 9px;">
&lt;script&gt;
  $(\'#states3\').select2({
    minimumResultsForSearch: 7,
    dropdownCssClass: \'select2-drop-bootstrap\'
  });
&lt;/script&gt;
</pre>
    </div>
    <div class="span6">
      <p>The Select2 dropdown can be styled to match the bootstrap dropdown by adding the <code></code> to the constructor.</p>
    </div>
  </div> -->

  <!-- ==================== -->

  <div class="row-fluid">
    <div class="span12 padded">
      <h3>Use images in Dropdowns</h3>
      <select name="chart_type" class="select2 narrow" data-placeholder="Choose a chart type...">
        <option></option>
        <option value="Donut">Donut</option>
        <option value="Funnel">Funnel</option>
        <option value="Horizontal">Horizontal</option>
        <option value="Line">Line</option>
        <option value="Pareto">Pareto</option>
        <option value="Pie">Pie</option>
        <option value="Stack">Stack</option>
        <option value="Vertical">Vertical</option>
      </select>
      <script>
        var $this = $(\'select[name="chart_type"]\')
          , ctor = getSelect2Constructor($this);
        ctor.dropdownCssClass = \'chart-results select2-narrow\';
        ctor.width = \'off\';
        ctor.minimumResultsForSearch = 9;
        ctor.formatResult = select2ChartResult;
        ctor.formatSelection = select2ChartSelection;
        ctor.escapeMarkup = function(m) { return m; };

        $this.select2(ctor);
      </script>
    </div>
  </div>

  <div class="row-fluid">
    <div class="span6">
<pre class="prettyprint linenums" style="margin-bottom: 9px;">
&lt;script&gt;
  var $this = $(\'select[name="chart_type"]\')
    , ctor = getSelect2Constructor($this);
  ctor.dropdownCssClass = \'chart-results\';
  ctor.width = \'off\';
  ctor.minimumResultsForSearch = 9;
  ctor.formatResult = select2ChartResult;
  ctor.formatSelection = select2ChartSelection;
  ctor.escapeMarkup = function(m) { return m; };

  $this.select2(ctor);
&lt;/script&gt;
</pre>
    </div>
    <div class="span6">
      <p>Using a custom renderer, you can even use images in drop downs.</p>
    </div>
  </div>


  <!-- ==================== -->

  <div class="row-fluid">
    <div class="span12 padded">
      <h3>Use module icon in Dropdowns</h3>
      <select name="label_module" class="select2 narrow" data-placeholder="Choose a chart type...">
        <option></option>
        <option value="Ac">Accounts</option>
        <option value="Op">Opportunities</option>
        <option value="Co">Contacts</option>
      </select>
      <script>
        var $this = $(\'select[name="label_module"]\')
          , ctor = getSelect2Constructor($this);
        ctor.width = \'off\';
        ctor.minimumResultsForSearch = 9;
        ctor.formatSelection = function(item) {
            return \'<span class="label label-module label-module-mini label-\' + item.text + \'">\' + item.id + \'</span>\';
          };
        ctor.escapeMarkup = function(m) { return m; };
        ctor.width = \'55px\';

        $this.select2(ctor);
      </script>
    </div>
  </div>

  <div class="row-fluid">
    <div class="span6">
<pre class="prettyprint linenums" style="margin-bottom: 9px;">
&lt;script&gt;
  var $this = $(\'select[name="label_module"]\')
    , ctor = getSelect2Constructor($this);
  ctor.width = \'off\';
  ctor.minimumResultsForSearch = 9;
  ctor.formatSelection = function(item) {
      return \'&lt;span class="label label-module label-module-mini label-\' + item.text + \'"&gt;\' + item.id + \'&lt;/span&gt;\';
    };
  ctor.escapeMarkup = function(m) { return m; };
  ctor.width = \'55px\';

  $this.select2(ctor);
&lt;/script&gt;
</pre>
    </div>
    <div class="span6">
      <p>Using a custom renderer, you can even use images in drop downs.</p>
    </div>
  </div>

  <!-- ==================== -->
  <div class="row-fluid">
    <div class="span12 padded">

      <div class="control-group error">
        <h3>Error Addon</h3>
        <label style="display:block">Single Select Error</label>
        <div class="input-append select error">
          <select id="priority3" class="select2" data-placeholder="Choose a priority...">
            <option></option>
            <option value="Urgent">Urgent</option>
            <option value="High">High</option>
            <option value="Medium">Medium</option>
            <option value="Low">Low</option>
          </select>
          <span class="error-tooltip  add-on local" rel="tooltip" data-original-title="Error: This field is required"><i class="icon-exclamation-sign"></i></span>
        </div>
      </div>
      <script>
        $(\'#priority3\').select2({width:\'200px\', minimumResultsForSearch:7, dropdownCssClass: \'select2-drop-error\'});
      </script>
    </div>
  </div>

  <div class="row-fluid">
    <div class="span6">
<pre class="prettyprint linenums" style="margin-bottom: 9px;">
&lt;div class="control-group error"&gt;
  &lt;div class="input-append select"&gt;
    &lt;select id="priority3"
        class="select2"
        data-placeholder="Choose a priority..."&gt;
      &lt;option&gt;&lt;/option&gt;
      &lt;option value="Urgent"&gt;Urgent&lt;/option&gt;
      ...
    &lt;/select&gt;
    &lt;span class="add-on"&gt;&lt;i class="icon-exclamation-sign"&gt;&lt;/i&gt;&lt;/span&gt;
    &lt;p class="help-block"&gt;Error. This field is required.&lt;/p&gt;&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;script&gt;
  $(\'#priority3\').select2({
    width:\'200px\',
    minimumResultsForSearch:7,
    dropdownCssClass: \'select2-drop-error\'
  });
&lt;/script&gt;
</pre>
    </div>

    <div class="span6">
      <p>Select2 controls can be styled with error notifications just like other inputs.
    </div>
  </div>

  <div class="row-fluid">
    <div class="span12">
      <h2>Multi Select</h2>
    </div>
  </div>

  <div class="row-fluid">
    <div class="span6">
      <div class="control-group padded">
        <label style="display:block">Multi Select with Basic Choices</h3>
        <select id="multi1" size="3" multiple="multiple" class="select2">
            <option>Option 2</option>
            <option>Option 3</option>
            <option>Option 4</option>
        </select>
        <p class="help-block"></p></span>
      </div>
      <script>
        $(\'#multi1\').select2({width:\'100%\'});
      </script>

      <div class="control-group error padded">
        <label style="display:block">Label</label>
        <div class="input-append select error">
          <select id="multi2" size="3" multiple="multiple" class="select2">
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
              <option value="4">Option 4</option>
          </select>
            <span class="error-tooltip  add-on local" rel="tooltip" data-original-title="Error: This field is required"><i class="icon-exclamation-sign"></i></span>
        </div>
      </div>
      <script>
        $(\'#multi2\').select2({width:\'300px\'});
      </script>
    </div>

    <div class="span6">
      Setting up a multiselect control with Select2 is as easy as adding the <code>multiple</code> attribute to the select element.
    </div>

  </div><!--/row-->

  <!-- ==================== -->

  <div class="row-fluid">
    <div class="span6 padded">
      <h3>Standard Pill Style</h3>
      <select id="states5" class="select2" multiple="multiple" data-placeholder="Select a state...">
        <option></option>
        <option value="MO">Missouri</option>
        <option value="MT">Montana</option>
        <option value="NE">Nebraska</option>
        <option value="NV">Nevada</option>
        <option value="NH">New Hampshire</option>
        <option value="NJ">New Jersey</option>
        <option value="NM">New Mexico</option>
        <option value="NY">New York</option>
        <option value="NC">North Carolina</option>
        <option value="ND">North Dakota</option>
        <option value="OH">Ohio</option>
        <option value="OK">Oklahoma</option>
        <option value="OR">Oregon</option>
        <option value="PA">Pennsylvania</option>
        <option value="RI">Rhode Island</option>
        <option value="SC">South Carolina</option>
        <option value="SD">South Dakota</option>
        <option value="TN">Tennessee</option>
        <option value="TX">Texas</option>
        <option value="UT">Utah</option>
        <option value="VT">Vermont</option>
        <option value="VA">Virginia</option>
        <option value="WA">Washington</option>
        <option value="WV">West Virginia</option>
        <option value="WI">Wisconsin</option>
        <option value="WY">Wyoming</option>
      </select>
      <script>
        $(\'#states5\').select2({
          width:\'100%\',
          minimumResultsForSearch:7,
          closeOnSelect: false,
          containerCssClass: \'select2-choices-pills-close\'
        });
      </script>
    </div>
  </div>

  <div class="row-fluid">
    <div class="span6">
<pre class="prettyprint linenums" style="margin-bottom: 9px;">
&lt;script&gt;
  $(\'#states5\').select2({
    width:\'100%\',
    minimumResultsForSearch:7,
    closeOnSelect: false,
    containerCssClass: \'select2-choices-pills-close\'
  });
&lt;/script&gt;
</pre>
    </div>
    <div class="span6">
      <p>The Select2 multiselect choices can be styled to look like our standard pills by setting the <code>containerCssClass</code> constructuor property to <code>select2-choices-pills-close</code>. If you want to keep the dropdown open for fast multi select actions, pass the <code>closeOnSelect: false</code> option.</p>
      <p>Deleting the custom choice pill is like in Outlook where you use the delete key to focus on a pill and then delete again to remove.</p>
    </div>
  </div>

  <!-- ==================== -->

  <div class="row-fluid">
    <div class="span6 padded">
      <h3>Custom Formaters</h3>
      <select id="states4" class="select2" multiple="multiple" data-placeholder="Select a state...">
        <option></option>
        <option value="AL">Alabama</option>
        <option value="AK">Alaska</option>
        <option value="AZ">Arizona</option>
        <option value="AR">Arkansas</option>
        <option value="CA">California</option>
        <option value="CO">Colorado</option>
        <option value="CT">Connecticut</option>
        <option value="DE">Delaware</option>
        <option value="DC">District Of Columbia</option>
        <option value="FL">Florida</option>
        <option value="GA">Georgia</option>
        <option value="HI">Hawaii</option>
        <option value="ID">Idaho</option>
        <option value="IL">Illinois</option>
        <option value="IN">Indiana</option>
        <option value="IA">Iowa</option>
        <option value="KS">Kansas</option>
        <option value="KY">Kentucky</option>
        <option value="LA">Louisiana</option>
        <option value="ME">Maine</option>
        <option value="MD">Maryland</option>
        <option value="MA">Massachusetts</option>
        <option value="MI">Michigan</option>
        <option value="MN">Minnesota</option>
        <option value="MS">Mississippi</option>

      </select>
      <script>
        $(\'#states4\').select2({
          width:\'100%\',
          minimumResultsForSearch:7,
          containerCssClass: \'select2-choices-pills\',
          formatSelection: function(item) {
            return \'<span>Choice</span><a href="javascript:void(0)" rel="\' + item.id +\'">\'+ item.text +\'</a>\';
          },
          escapeMarkup: function(m) { return m; }
        });
      </script>
    </div>
  </div>

  <div class="row-fluid">
    <div class="span6">
<pre class="prettyprint linenums" style="margin-bottom: 9px;">
&lt;script&gt;

  $(\'#states4\').select2({
    width:\'100%\',
    containerCssClass: \'select2-choices-pills\',
    formatSelection: function(item) {
      return \'&lt;span&gt;Choice&lt;/span&gt;&lt;a href="javascript:void(0)" rel="\' + item.id +\'"&gt;\'+ item.text +\'&lt;/a&gt;\';
    },
    escapeMarkup: function(m) { return m; }
  });
&lt;/script&gt;
</pre>
    </div>
    <div class="span6">
      <p>The Select2 multiselect choices can be styled to look like our split filter pills by adding the <code>select2-choices-pills</code> class to the constructor and passing the custom formatter for the choices in the <code>formatSelection</code> option.</p>
    </div>
  </div>

</section>


<script>
  {{! $("select.select2").each(function(){
    var $this = $(this)
      , ctor = getSelect2Constructor($this);
    //$this.select2( ctor );
  }); }}

  $(\'.error .select .error-tooltip\').tooltip({
            trigger: \'click\',
            container: \'body\'
  });
</script>
',
      'layouts_list' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
<!-- Tables
================================================== -->
<section id="tables">
  <div class="page-header">
    <h1>List Tables <small>For, you guessed it, tabular data</small></h1>
  </div>

  <div class="row-fluid">
    <div class="span3 columns">
      <h3>About data tables</h3>
      <p>Sugar7 uses custom code to create dynamic data tables.</p>
      <p>The LESS file for styling data tables can be found at:<br>
        /sugarcrm/styleguide/less/sugar-specific/datatables.less.</p>
    </div>
    <div class="span9 columns">


  <h2>List Layout</h2>
  <p>The layout for a <a href="#Styleguide/layout/list">standard list view</a> containing all basic field types.</p>

  <h2>Table options</h2>
  <table class="table table-bordered table-striped">
  <thead>
      <tr>
        <th>Name</th>
        <th>Class</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Default</td>
        <td class="muted">None</td>
        <td>No styles, just columns and rows</td>
      </tr>
      <tr>
        <td>Basic</td>
        <td>
          <code>.table</code>
        </td>
        <td>Only horizontal lines between rows</td>
      </tr>
      <tr>
        <td>Bordered</td>
        <td>
          <code>.table-bordered</code>
        </td>
        <td>Rounds corners and adds outter border</td>
      </tr>
      <tr>
        <td>Zebra-stripe</td>
        <td>
          <code>.table-striped</code>
        </td>
        <td>Adds light gray background color to odd rows (1, 3, 5, etc)</td>
      </tr>
      <tr>
        <td>Condensed</td>
        <td>
          <code>.table-condensed</code>
        </td>
        <td>Cuts vertical padding in half, from 8px to 4px, within all <code>td</code> and <code>th</code> elements</td>
      </tr>
    </tbody>
  </table>


  <h2>Example tables</h2>

  <h3>1. Default table styles</h3>
  <div class="row-fluid">
    <div class="span4">
      <p>Tables are automatically styled with only a few borders to ensure readability and maintain structure. With 2.0, the <code>.table</code> class is required.</p>
<pre class="prettyprint linenums">
&lt;table class="table"&gt;
  …
&lt;/table&gt;</pre>
    </div>
    <div class="span8">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Language</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>CSS</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>Javascript</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Stu</td>
            <td>Dent</td>
            <td>HTML</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>


  <h3>2. Striped table</h3>
  <div class="row-fluid">
    <div class="span4">
      <p>Get a little fancy with your tables by adding zebra-striping&mdash;just add the <code>.table-striped</code> class.</p>
      <p class="muted"><strong>Note:</strong> Striped tables use the <code>:nth-child</code> CSS selector and is not available in IE7-IE8.</p>
<pre class="prettyprint linenums" style="margin-bottom: 18px;">
&lt;table class="table table-striped"&gt;
  …
&lt;/table&gt;</pre>
    </div>
    <div class="span8">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Language</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>CSS</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>Javascript</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Stu</td>
            <td>Dent</td>
            <td>HTML</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>


  <h3>3. Bordered table</h3>
  <div class="row-fluid">
    <div class="span4">
      <p>Add borders around the entire table and rounded corners for aesthetic purposes.</p>
<pre class="prettyprint linenums">
&lt;table class="table table-bordered"&gt;
  …
&lt;/table&gt;</pre>
    </div>
    <div class="span8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Language</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td colspan="2">Mark Otto</td>
            <td>CSS</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td rowspan="2">Javascript</td>
          </tr>
          </tr>
            <td>3</td>
            <td>Stu</td>
            <td>Dent</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Brosef</td>
            <td>Stalin</td>
            <td>HTML</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>


  <h3>4. Condensed table</h3>
  <div class="row-fluid">
    <div class="span4">
      <p>Make your tables more compact by adding the <code>.table-condensed</code> class to cut table cell padding in half (from 8px to 4px).</p>
<pre class="prettyprint linenums" style="margin-bottom: 18px;">
&lt;table class="table table-condensed"&gt;
  …
&lt;/table&gt;</pre>
    </div>
    <div class="span8">
      <table class="table table-condensed">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Language</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>CSS</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>Javascript</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Stu</td>
            <td>Dent</td>
            <td>HTML</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>



  <h3>5. Combine them all!</h3>
  <div class="row-fluid">
    <div class="span4">
      <p>Feel free to combine any of the table classes to achieve different looks by utilizing any of the available classes.</p>
<pre class="prettyprint linenums" style="margin-bottom: 18px;">
&lt;table class="table table-striped table-bordered table-condensed"&gt;
  ...
&lt;/table&gt;</pre>
    </div>
    <div class="span8">
      <table class="table table-striped table-bordered table-condensed">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Language</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>CSS</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>Javascript</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Stu</td>
            <td>Dent</td>
            <td>HTML</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Brosef</td>
            <td>Stalin</td>
            <td>HTML</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</div>
</div>
</section>
',
      'base_grid' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}

<section id="grid-system">
  <div class="page-header">
    <h1>Grid system <small>12 columns with a responsive twist</small></h1>
  </div>
  <h2>Default 940px grid</h2>
  <div class="row show-grid">
    <div class="span1">1</div>
    <div class="span1">1</div>
    <div class="span1">1</div>
    <div class="span1">1</div>
    <div class="span1">1</div>
    <div class="span1">1</div>
    <div class="span1">1</div>
    <div class="span1">1</div>
    <div class="span1">1</div>
    <div class="span1">1</div>
    <div class="span1">1</div>
    <div class="span1">1</div>
  </div>
  <div class="row show-grid">
    <div class="span4">4</div>
    <div class="span4">4</div>
    <div class="span4">4</div>
  </div>
  <div class="row show-grid">
    <div class="span4">4</div>
    <div class="span8">8</div>
  </div>
  <div class="row show-grid">
    <div class="span6">6</div>
    <div class="span6">6</div>
  </div>
  <div class="row show-grid">
    <div class="span12">12</div>
  </div>
  <div class="row">
    <div class="span4">
      <p>The default grid system provided is a <strong>940px-wide, 12-column grid</strong>.</p>
      <p>It also has four responsive variations for various devices and resolutions: phone, tablet portrait, table landscape and small desktops, and large widescreen desktops.</p>
    </div>
    <div class="span4">
<pre class="prettyprint linenums">
&lt;div class="row"&gt;
  &lt;div class="span4"&gt;...&lt;/div&gt;
  &lt;div class="span8"&gt;...&lt;/div&gt;
&lt;/div&gt;
</pre>
    </div>
    <div class="span4">
      <p>As shown here, a basic layout can be created with two "columns," each spanning a number of the 12 foundational columns we defined as part of our grid system.</p>
    </div>
  </div><!-- /row -->

  <br>

  <h2>Offsetting columns</h2>
  <div class="row show-grid">
    <div class="span4">4</div>
    <div class="span4 offset4">4 offset 4</div>
  </div><!-- /row -->
  <div class="row show-grid">
    <div class="span3 offset3">3 offset 3</div>
    <div class="span3 offset3">3 offset 3</div>
  </div><!-- /row -->
  <div class="row show-grid">
    <div class="span8 offset4">8 offset 4</div>
  </div><!-- /row -->
<pre class="prettyprint linenums">
&lt;div class="row"&gt;
  &lt;div class="span4"&gt;...&lt;/div&gt;
  &lt;div class="span4 offset4"&gt;...&lt;/div&gt;
&lt;/div&gt;
</pre>

  <br>

  <h2>Nesting columns</h2>
  <div class="row">
    <div class="span6">
      <p>With the static (non-fluid) grid system, nesting is easy. To nest your content, just add a new <code>.row</code> and set of <code>.span*</code> columns within an existing <code>.span*</code> column.</p>
      <h4>Example</h4>
      <div class="row show-grid">
        <div class="span6">
         vel 1 of column
          <div class="row show-grid">
            <div class="span3">
             vel 2
            </div>
            <div class="span3">
             vel 2
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="span6">
<pre class="prettyprint linenums">
&lt;div class="row"&gt;
  &lt;div class="span12"&gt;
    Level 1 of column
    &lt;div class="row"&gt;
      &lt;div class="span6"&gt;Level 2&lt;/div&gt;
      &lt;div class="span6"&gt;Level 2&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
    </div>
  </div>

  <h2>Grid customization</h2>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Variable</th>
        <th>Default value</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>@gridColumns</code></td>
        <td>12</td>
        <td>Number of columns</td>
      </tr>
      <tr>
        <td><code>@gridColumnWidth</code></td>
        <td>60px</td>
        <td>Width of each column</td>
      </tr>
      <tr>
        <td><code>@gridGutterWidth</code></td>
        <td>20px</td>
        <td>Negative space between columns</td>
      </tr>
      <tr>
        <td><code>@siteWidth</code></td>
        <td><em>Computed sum of all columns and gutters</em></td>
        <td>Counts number of columns and gutters to set width of the <code>.container-fixed()</code> mixin</td>
      </tr>
    </tbody>
  </table>
  <div class="row">
    <div class="span4">
      <h3>Variables in LESS</h3>
      <p>Built in are a handful of variables for customizing the default 940px grid system, documented above. All variables for the grid are stored in variables.less.</p>
    </div>
    <div class="span4">
      <h3>How to customize</h3>
      <p>Modifying the grid means changing the three <code>@grid*</code> variables and recompiling. Change the grid variables in variables.less and use one of the <a href="#compiling">four ways documented to recompile</a>. If you\'re adding more columns, be sure to add the CSS for those in grid.less.</p>
    </div>
    <div class="span4">
      <h3>Staying responsive</h3>
      <p>Customization of the grid only works at the default level, the 940px grid. To maintain the responsive aspects, you\'ll also have to customize the grids in responsive.less.</p>
    </div>
  </div><!-- /row -->

</section>

<section id="layouts">
  <div class="page-header">
    <h1>Layouts <small>Basic templates to create webpages</small></h1>
  </div>

  <div class="row">
    <div class="span6">
      <h2>Fixed layout</h2>
      <p>The default and simple 940px-wide, centered layout for just about any website or page provided by a single <code>&lt;div class="container"&gt;</code>.</p>
      <div class="minicon-layout">
        <div class="minicon-layout-body"></div>
      </div>
<pre class="prettyprint linenums">
&lt;body&gt;
  &lt;div class="container"&gt;
    ...
  &lt;/div&gt;
&lt;/body&gt;
</pre>
  </div><!-- /col -->
  <div class="span6">
    <h2>Fluid layout</h2>
    <p><code>&lt;div class="container-fluid"&gt;</code> gives flexible page structure, min- and max-widths, and a left-hand sidebar. It\'s great for apps and docs.</p>
    <div class="minicon-layout fluid">
      <div class="minicon-layout-sidebar"></div>
      <div class="minicon-layout-body"></div>
    </div>
<pre class="prettyprint linenums">
&lt;div class="container-fluid"&gt;
  &lt;div class="row-fluid"&gt;
    &lt;div class="span2"&gt;
      &lt;!--Sidebar content--&gt;
    &lt;/div&gt;
    &lt;div class="span10"&gt;
      &lt;!--Body content--&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
    </div><!-- /col -->
  </div><!-- /row -->
</section>
',
      'layouts_modals' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
<!-- Modal
================================================== -->
<section id="modals">
  <div class="page-header">
    <h1>Modals <small>bootstrap-modal.js</small></h1>
  </div>
  <div class="row-fluid">
    <div class="span3 columns">
      <h3>About modals</h3>
      <p>A streamlined, but flexible, take on the traditional javascript modal plugin with only the minimum required functionality and smart defaults.</p>
      <p>The bootsrap-modal.js plugin is included in the default build of SugarCRM.</p>
    </div>
    <div class="span9 columns">
      <h2>Static example</h2>
      <p>Below is a statically rendered modal.</p>
      <div class="well modal-example" style="background-color: #888; border: none;">
        <div class="modal" style="position: relative; top: auto; left: auto; margin: 0 auto; z-index: 1">
          <div class="modal-header">
            <a href="#" class="close" data-dismiss="modal">&times;</a>
            <h3>Modal header</h3>
          </div>
          <div class="modal-body">
            <div class="modal-content">
              <p>One fine body…</p>
            </div>
            <div class="modal-footer">
              <a href="#" class="btn btn-invisible btn-link pull-left">Cancel</a>
              <a href="#" class="btn btn-primary">Save changes</a>
            </div>
          </div>
        </div>
      </div> <!-- /well -->

      <h2>Live demo</h2>
      <p>Toggle a modal via javascript by clicking the button below. It will slide down and fade in from the top of the page.</p>

      <!-- sample modal content -->
      <div id="myModal" class="modal hide fade">
        <div class="modal-header">
          <a class="close" data-dismiss="modal" >&times;</a>
          <h3>Modal Heading</h3>
        </div>
        <div class="modal-body">
          <!-- <div class="modal-content"> -->
            <h4>Text in a modal</h4>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem.</p>

            <h4>Popover in a modal</h4>
            <p>This <a href="#" class="btn popover-test" rel="popover" title="A Title" data-content="And here\'s some amazing content. It\'s very engaging. right?">button</a> should trigger a popover on hover.</p>

            <h4>Tooltips in a modal</h4>
            <p><a href="#" rel="tooltip" title="Tooltip">This link</a> and <a href="#" rel="tooltip" title="Tooltip">that link</a> should have tooltips on hover.</p>
            <h4>Text in a modal</h4>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem.</p>
          <!-- </div> -->
          <div class="modal-footer">
            <a href="#" class="btn btn-invisible btn-link pull-left" data-dismiss="modal">Cancel</a>
            <a href="#" class="btn btn-primary">Save changes</a>
          </div>
        </div>
      </div>

      <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-large">Launch demo modal</a>

      <hr>

      <h2>Using bootstrap-modal</h2>
      <p>Call the modal via javascript:</p>
      <pre class="prettyprint linenums">$(\'#myModal\').modal(options)</pre>
      <h3>Options</h3>
      <table class="table table-bordered table-striped">
        <thead>
         <tr>
           <th style="width: 100px;">Name</th>
           <th style="width: 50px;">type</th>
           <th style="width: 50px;">default</th>
           <th>description</th>
         </tr>
        </thead>
        <tbody>
         <tr>
           <td>backdrop</td>
           <td>boolean</td>
           <td>true</td>
           <td>Includes a modal-backdrop element</td>
         </tr>
         <tr>
           <td>keyboard</td>
           <td>boolean</td>
           <td>true</td>
           <td>Closes the modal when escape key is pressed</td>
         </tr>
        </tbody>
      </table>
      <h3>Markup</h3>
      <p>You can activate modals on your page easily without having to write a single line of javascript. Just set <code>data-toggle="modal"</code> on a controller element with a <code>data-target="#foo"</code> or <code>href="#foo"</code> which corresponds to a modal element id, and when clicked, it will launch your modal.</p>
      <p>Also, to add options to your modal instance, just include them as additional data attributes on either the control element or the modal markup itself.</p>
<pre class="prettyprint linenums">
&lt;a class="btn" data-toggle="modal" href="#myModal"&gt;Launch Modal&lt;/a&gt;
</pre>

<pre class="prettyprint linenums">
&lt;div class="modal spanX"&gt;
  &lt;div class="modal-header"&gt;
    &lt;a class="close" data-dismiss="modal"&gt;&times;&lt;/a&gt;
    &lt;h3&gt;Modal header&lt;/h3&gt;
  &lt;/div&gt;
  &lt;div class="modal-body"&gt;
    <!-- &lt;div class="modal-content"&gt; -->
      &lt;p&gt;One fine body…&lt;/p&gt;
    <!-- &lt;/div&gt; -->
    &lt;div class="modal-footer"&gt;
      &lt;a href="#" class="btn btn-invisible btn-link pull-left"&gt;Cancel&lt;/a&gt;
      &lt;a href="#" class="btn btn-primary"&gt;Save changes&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
      <div class="alert alert-info">
        <strong>Important Changes!</strong> The foooter has moved inside the <code>div.modal-body</code> element and a required <code>&lt;div&gt;</code> element now wraps the modal content. If you want to support vertical scrolling of the modal content, add the <code>modal.scroll</code> to that div.
      </div>

      <!-- sample modal content -->
      <div id="myModal-sidecar" class="modal hide fade">
        <div>
          <div class="modal-header header">
            <div class="buttons pull-right">
                <a href="javascript:void(0);" class="close" data-dismiss="modal" data-original-title="Close"><i class="icon-remove icon-sm"></i></a>
            </div>
            <h3 class="title">
                Mass Update
            </h3>
          </div>
        </div>
        <div class="modal-body modal-scroll-content">
          <div class="layout_Accounts">
            <!-- <div style="padding:8px;height:28px;border-bottom:1px solid #ededed">
              <a class="btn">Submit</a>
            </div> -->
            <div>
              <div class="modal-content">
                 <!-- style="overflow:scroll;max-height:382px" -->
                <h4>Text in a modal</h4>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem.</p>

                <h4>Popover in a modal</h4>
                <p>This <a href="#" class="btn popover-test" rel="popover" title="A Title" data-content="And here\'s some amazing content. It\'s very engaging. right?">button</a> should trigger a popover on hover.</p>

                <h4>Tooltips in a modal</h4>
                <p><a href="#" rel="tooltip" title="Tooltip">This link</a> and <a href="#" rel="tooltip" title="Tooltip">that link</a> should have tooltips on hover.</p>
                <h4>Text in a modal</h4>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem.</p>

                <h4>Datepicker on span in a modal</h4>
                <div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="mm-dd-yyyy" rel="datepicker">
                  <input class="span2" size="16" type="text" value="" placeholder="mm-dd-yyyy">
                  <span class="add-on"><i class="icon-calendar"></i></span>
                </div>

                <h4>Datepicker and Timepicker on input in a modal</h4>
                <p><a href="#" rel="tooltip" title="Tooltip">This link</a> and <a href="#" rel="tooltip" title="Tooltip">that link</a> should have tooltips on hover.</p>
                <div class="well" style="position:relative">
                  <input type="text" class="span2" value="" placeholder="mm-dd-yyyy" id="dp1" rel="datepicker">
                  <input type="text" class="span2" placeholder="hh:mm" id="tp1" rel="timepicker">
                </div>

                <h4>Popover in a modal</h4>
                <p>This <a href="#" class="btn popover-test" rel="popover" title="A Title" data-content="And here\'s some amazing content. It\'s very engaging. right?">button</a> should trigger a popover on hover.</p>

                <h4>Tooltips in a modal</h4>
                <p><a href="#" rel="tooltip" title="Tooltip">This link</a> and <a href="#" rel="tooltip" title="Tooltip">that link</a> should have tooltips on hover.</p>
                <h4>Text in a modal</h4>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem.</p>

                <h4>Popover in a modal</h4>
                <p>This <a href="#" class="btn popover-test" rel="popover" title="A Title" data-content="And here\'s some amazing content. It\'s very engaging. right?">button</a> should trigger a popover on hover.</p>

                <h4>Tooltips in a modal</h4>
                <p><a href="#" rel="tooltip" title="Tooltip">This link</a> and <a href="#" rel="tooltip" title="Tooltip">that link</a> should have tooltips on hover.</p>
                <h4>Text in a modal</h4>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem.</p>

                <h4>Popover in a modal</h4>
                <p>This <a href="#" class="btn popover-test" rel="popover" title="A Title" data-content="And here\'s some amazing content. It\'s very engaging. right?">button</a> should trigger a popover on hover.</p>

                <h4>Tooltips in a modal</h4>
                <p><a href="#" rel="tooltip" title="Tooltip">This link</a> and <a href="#" rel="tooltip" title="Tooltip">that link</a> should have tooltips on hover.</p>
                <h4>Text in a modal</h4>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem.</p>

                <h4>Popover in a modal</h4>
                <p>This <a href="#" class="btn popover-test" rel="popover" title="A Title" data-content="And here\'s some amazing content. It\'s very engaging. right?">button</a> should trigger a popover on hover.</p>

                <h4>Tooltips in a modal</h4>
                <p><a href="#" rel="tooltip" title="Tooltip">This link</a> and <a href="#" rel="tooltip" title="Tooltip">that link</a> should have tooltips on hover.</p>
              </div>
              <div class="modal-footer">
                <a href="#" class="btn btn-invisible btn-link pull-left" data-dismiss="modal">Cancel</a>
                <a href="#" class="btn btn-primary">Save changes</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <a data-toggle="modal" href="#myModal-sidecar" class="btn btn-primary btn-large">Launch sidecar modal</a>

      <hr>

      <div class="alert alert-info">
        <strong>Now With Widths!</strong> The outer modal div element now supports standards widths using the <code>.spanX</code> classes.
      </div>

      <!-- sample modal content -->
      <div id="myModal-wide" class="modal hide fade span12">
        <div class="modal-header">
          <a class="close" data-dismiss="modal" >&times;</a>
          <h3>Modal Heading</h3>
        </div>
        <div class="modal-body">
            <h4>Big Paragraph</h4>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>

            <h4>Big Paragraph</h4>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
          <div class="modal-footer">
            <a href="#" class="btn btn-invisible btn-link pull-left" data-dismiss="modal">Cancel</a>
            <a href="#" class="btn btn-primary">Save changes</a>
          </div>
        </div>
      </div>
      <a data-toggle="modal" href="#myModal-wide" class="btn btn-primary btn-large">Launch wide modal</a>

      <hr>

      <div class="alert alert-info">
        <strong>Heads up!</strong> If you want your modal to animate in and out, just add a <code>.fade</code> class to the <code>.modal</code> element (refer to the demo to see this in action) and include bootstrap-transition.js.
      </div>
      <h3>Methods</h3>
      <h4>.modal(options)</h4>
      <p>Activates your content as a modal. Accepts an optional options <code>object</code>.</p>
<pre class="prettyprint linenums">
$(\'#myModal\').modal({
  keyboard: false
})</pre>
      <h4>.modal(\'toggle\')</h4>
      <p>Manually toggles a modal.</p>
      <pre class="prettyprint linenums">$(\'#myModal\').modal(\'toggle\')</pre>
      <h4>.modal(\'show\')</h4>
      <p>Manually opens a modal.</p>
      <pre class="prettyprint linenums">$(\'#myModal\').modal(\'show\')</pre>
      <h4>.modal(\'hide\')</h4>
      <p>Manually hides a modal.</p>
      <pre class="prettyprint linenums">$(\'#myModal\').modal(\'hide\')</pre>
      <h3>Events</h3>
      <p>Modal class exposes a few events for hooking into modal functionality.</p>
      <table class="table table-bordered table-striped">
        <thead>
         <tr>
           <th style="width: 150px;">Event</th>
           <th>Description</th>
         </tr>
        </thead>
        <tbody>
         <tr>
           <td>show</td>
           <td>This event fires immediately when the <code>show</code> instance method is called.</td>
         </tr>
         <tr>
           <td>shown</td>
           <td>This event is fired when the modal has been made visible to the user (will wait for css transitions to complete).</td>
         </tr>
         <tr>
           <td>hide</td>
           <td>This event is fired immediately when the <code>hide</code> instance method has been called.</td>
         </tr>
         <tr>
           <td>hide</td>
           <td>This event is fired when the modal has finished being hidden from the user (will wait for css transitions to complete).</td>
         </tr>
        </tbody>
      </table>

<pre class="prettyprint linenums">
$(\'#myModal\').on(\'hide\', function () {
  // do something…
})</pre>
    </div>
  </div>
</section>
',
      'charts_colors' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}

    <section id="colors">

      <div class="page-header">
        <h2>Defining Chart Colors <small>Flexible methods for assigning color maps and fill methods to D3 charts.</small></h2>
      </div>

      <div class="row-fluid">

        <div class="span6">
          <h3>Standard Chart Colors</h3>
          <p>Using standard D3 chart colors is the default (Option 1 data).</p>
<div id="gauge1" class="nv-chart">
  <svg></svg>
</div>
<pre class="prettyprint linenums">
  var gauge = nv.models.gaugeChart()
      .colorData( \'default\' );

  d3.select("#gauge1 svg")
    .datum(gauge_data_1)
    .call(gauge);
</pre>
        </div> <!-- end col -->

        <div class="span6">
          <h3>Standard Chart Colors with Gradient Fill</h3>
          <p>It is possible to fill the chart shapes with a gradient using the active color palette.</p>
<div id="gauge2" class="nv-chart">
  <svg></svg>
</div>
<pre class="prettyprint linenums">
  var gauge = nv.models.gaugeChart()
        .colorData( \'default\', {gradient:true} );

  d3.select("#gauge2 svg")
    .datum(gauge_data_1)
    .call(gauge);
</pre>
        </div> <!-- end col -->

      </div> <!-- end row -->


      <div class="row-fluid">

        <div class="span6">
          <h3>Data-Defined Chart Colors</h3>
          <p>If colors are defined in the data, they are used instead of D3 colors (Option 2 data).</p>
<div id="gauge3" class="nv-chart">
  <svg></svg>
</div>
<pre class="prettyprint linenums">
  var gauge = nv.models.gaugeChart()
      .colorData( \'default\' );

  d3.select("#gauge3 svg")
    .datum(gauge_data_2)
    .call(gauge);
</pre>
        </div> <!-- end col -->

        <div class="span6">
          <h3>Data-Defined Chart Colors with Gradient Fill</h3>
          <p>It is possible to fill the chart shapes with a gradient using a graduated color palette.</p>
<div id="gauge4" class="nv-chart">
  <svg></svg>
</div>
<pre class="prettyprint linenums">
  var gauge = nv.models.gaugeChart()
        .colorData( \'default\', {gradient:true} );

  d3.select("#gauge4 svg")
    .datum(gauge_data_2)
    .call(gauge);
</pre>
        </div> <!-- end col -->

      </div> <!-- end row -->

      <div class="row-fluid">

        <div class="span6">
          <h3>Graduated Palette Chart Colors</h3>
          <p>It is also possible to use a graduated palette (any data option).</p>
<div id="gauge5" class="nv-chart">
  <svg></svg>
</div>
<pre class="prettyprint linenums">
  var gauge = nv.models.gaugeChart()
      .colorData( \'graduated\', {c1: \'#e8e2ca\', c2: \'#3e6c0a\', l: gauge_data.data.length} );

  d3.select("#gauge5 svg")
    .datum(gauge_data_1)
    .call(gauge);
</pre>
        </div> <!-- end col -->

        <div class="span6">
          <h3>Graduated Palette Chart Colors with Gradient Fill</h3>
          <p>It is possible to fill the chart shapes with a gradient using a graduated color palette.</p>
<div id="gauge6" class="nv-chart">
  <svg></svg>
</div>
<pre class="prettyprint linenums">
  var gauge = nv.models.gaugeChart()
      .colorData( \'graduated\', {c1: \'#e8e2ca\', c2: \'#3e6c0a\', l: gauge_data.data.length, gradient:true} );

  d3.select("#gauge6 svg")
    .datum(gauge_data_1)
    .call(gauge);
</pre>
        </div> <!-- end col -->

      </div> <!-- end row -->

      <div class="row-fluid">

        <div class="span6">
          <h3>CSS Class Chart Colors</h3>
          <p>Chart colors can be defined using classes. The default classes in themes). If classes are not defined in data, they are assigned sequentially.</p>
<div id="gauge7" class="nv-chart">
  <svg></svg>
</div>
<pre class="prettyprint linenums">
  var gauge = nv.models.gaugeChart()
      .colorData( \'class\' );

  d3.select("#gauge7 svg")
    .datum(gauge_data_1)
    .call(gauge);
</pre>
        </div> <!-- end col -->

        <div class="span6">
          <h3>Data-Defined Chart Classes</h3>
          <p>It is possible to specify which chart class to use for use for a data series in the chart data (Option 3 data).</p>
<div id="gauge8" class="nv-chart">
  <svg></svg>
</div>
<pre class="prettyprint linenums">
  var gauge = nv.models.gaugeChart()
      .colorData( \'class\', {gradient:true} );

  d3.select("#gauge8 svg")
    .datum(gauge_data_3)
    .call(gauge);
</pre>
        </div> <!-- end col -->

      </div> <!-- end row -->
          <div class="alert alert-info">
            <strong>Data-Defined Chart Classes with Gradient Fill</strong> It is possible to define gradient fills with CSS but requires use of SVG resource files <code>.nv-fill-gradient { fill: \'url(./custom_gradient.svg)\'; }</code>; however, they are not currently supported by the theming engine.
          </div>
    </section>

    <section id="colors">
      <div class="page-header">
        <h2>Example Chart Data Options <small>Options for setting chart color styles.</small></h2>
        <p>Color classes and RGB hex values can be embedded in the chart data. Depending on the colorData setting, they may or may not be used.</p>
      </div>
      <div class="row-fluid">

        <div class="span4">
          <h3>Option 1: Default Chart Data</h3>
          <p>A basic data definition for charts will use the standard D3 colors.</p>
<pre class="prettyprint linenums">
    var gauge_data_1 = {
      \'properties\': {
        \'title\': \'Closed Won Opportunities Gauge\',
        \'value\': 4
      },
      \'data\': [
        {
          key: "Range 1"
          , y: 3
        },
        {
          key: "Range 2"
          , y: 5
        },
        {
          key: "Range 3"
          , y: 7
        },
        {
          key: "Range 4"
          , y: 9
        }
      ]
    };
</pre>
        </div> <!-- end col -->

        <div class="span4">
          <h3>Option 2: Data-Defined Colors</h3>
          <p>If colors are defined in the data, they are used instead of D3 colors.</p>
<pre class="prettyprint linenums">
    var gauge_data_2 = {
      \'properties\': {
        \'title\': \'Closed Won Opportunities Gauge\',
        \'value\': 4
      },
      \'data\': [
        {
          key: "Range 1"
          , y: 3
          , color: "#d62728"
        },
        {
          key: "Range 2"
          , y: 5
          , color: "#ff7f0e"
        },
        {
          key: "Range 3"
          , y: 7
          , color: "#bcbd22"
        },
        {
          key: "Range 4"
          , y: 9
          , color: "#2ca02c"
        }
      ]
    };
</pre>
        </div> <!-- end col -->

        <div class="span4">
          <h3>Option 3: Data-Defined Classes</h3>
          <p>If classes are defined in the data, they are used to set the style properties.</p>
<pre class="prettyprint linenums">
    var gauge_data_3 = {
      \'properties\': {
        \'title\': \'Closed Won Opportunities Gauge\',
        \'value\': 4
      },
      \'data\': [
        {
          key: "Range 1"
          , y: 3
          , class: "nv-fill07"
        },
        {
          key: "Range 2"
          , y: 5
          , class: "nv-fill03"
        },
        {
          key: "Range 3"
          , y: 7
          , class: "nv-fill17"
        },
        {
          key: "Range 4"
          , y: 9
          , class: "nv-fill05"
        }
      ]
    };
</pre>
        </div> <!-- end col -->

      </div> <!-- end row -->

    </section>
    <section id="colors">
      <div class="page-header">
        <h2>Color Styles <small>Standard D3 categorical color scales for charts.</small></h2>
        <p>A description of the color scales is in <a href="https://github.com/mbostock/d3/wiki/Ordinal-Scales">D3 documentation</a>. New color scales can be generated using Cynthia Brewer\'s <a href="http://colorbrewer2.org/">ColorBrewer</a>.</p>
      </div>
      <div class="row-fluid">
        <div class="span6">
          <h3>Fill</h3>
          <p>A series of alternating light and dark pastel colors.</p>
          <div>
<table class="table table-bordered table-striped">
  <tr>
    <td><div class="nv-fill00 swatch"></div></td><td><code>.nv-fill00 { fill:#1f77b4; }</code></td>
  </tr>
  <tr>
    <td><div class="nv-fill01 swatch"></div></td><td><code>.nv-fill01 { fill:#aec7e8; }</code></td>
  </tr>
  <tr>
    <td><div class="nv-fill02 swatch"></div></td><td><code>.nv-fill02 { fill:#ff7f0e; }</code></td>
  </tr>
  <tr>
    <td><div class="nv-fill03 swatch"></div></td><td><code>.nv-fill03 { fill:#ffbb78; }</code></td>
  </tr>
  <tr>
    <td><div class="nv-fill04 swatch"></div></td><td><code>.nv-fill04 { fill:#2ca02c; }</code></td>
  </tr>
  <tr>
    <td><div class="nv-fill05 swatch"></div></td><td><code>.nv-fill05 { fill:#98df8a; }</code></td>
  </tr>
  <tr>
    <td><div class="nv-fill06 swatch"></div></td><td><code>.nv-fill06 { fill:#d62728; }</code></td>
  </tr>
  <tr>
    <td><div class="nv-fill07 swatch"></div></td><td><code>.nv-fill07 { fill:#ff9896; }</code></td>
  </tr>
  <tr>
    <td><div class="nv-fill08 swatch"></div></td><td><code>.nv-fill08 { fill:#9467bd; }</code></td>
  </tr>
  <tr>
    <td><div class="nv-fill09 swatch"></div></td><td><code>.nv-fill09 { fill:#c5b0d5; }</code></td>
  </tr>
  <tr>
    <td><div class="nv-fill10 swatch"></div></td><td><code>.nv-fill10 { fill:#8c564b; }</code></td>
  </tr>
  <tr>
    <td><div class="nv-fill11 swatch"></div></td><td><code>.nv-fill11 { fill:#c49c94; }</code></td>
  </tr>
  <tr>
    <td><div class="nv-fill12 swatch"></div></td><td><code>.nv-fill12 { fill:#e377c2; }</code></td>
  </tr>
  <tr>
    <td><div class="nv-fill13 swatch"></div></td><td><code>.nv-fill13 { fill:#f7b6d2; }</code></td>
  </tr>
  <tr>
    <td><div class="nv-fill14 swatch"></div></td><td><code>.nv-fill14 { fill:#7f7f7f; }</code></td>
  </tr>
  <tr>
    <td><div class="nv-fill15 swatch"></div></td><td><code>.nv-fill15 { fill:#c7c7c7; }</code></td>
  </tr>
  <tr>
    <td><div class="nv-fill16 swatch"></div></td><td><code>.nv-fill16 { fill:#bcbd22; }</code></td>
  </tr>
  <tr>
    <td><div class="nv-fill17 swatch"></div></td><td><code>.nv-fill17 { fill:#dbdb8d; }</code></td>
  </tr>
  <tr>
    <td><div class="nv-fill18 swatch"></div></td><td><code>.nv-fill18 { fill:#17becf; }</code></td>
  </tr>
  <tr>
    <td><div class="nv-fill19 swatch"></div></td><td><code>.nv-fill19 { fill:#9edae5; }</code></td>
  </tr>
</table>
          </div>
        </div>

        <div class="span6">
          <h3>Stroke</h3>
          <p>Bolder colors used to color lines.</p>
<table class="table table-bordered table-striped">
  <tr>
    <td><div class="nv-stroke0 swatch"></div></td><td><code>.nv-stroke0 { stroke:#1f77b4; }</code></td>
  </tr>
  <tr>
    <td><div class="nv-stroke1 swatch"></div></td><td><code>.nv-stroke1 { stroke:#ff7f0e; }</code></td>
  </tr>
  <tr>
    <td><div class="nv-stroke2 swatch"></div></td><td><code>.nv-stroke2 { stroke:#2ca02c; }</code></td>
  </tr>
  <tr>
    <td><div class="nv-stroke3 swatch"></div></td><td><code>.nv-stroke3 { stroke:#d62728; }</code></td>
  </tr>
  <tr>
    <td><div class="nv-stroke4 swatch"></div></td><td><code>.nv-stroke4 { stroke:#9467bd; }</code></td>
  </tr>
  <tr>
    <td><div class="nv-stroke5 swatch"></div></td><td><code>.nv-stroke5 { stroke:#8c564b; }</code></td>
  </tr>
  <tr>
    <td><div class="nv-stroke6 swatch"></div></td><td><code>.nv-stroke6 { stroke:#e377c2; }</code></td>
  </tr>
  <tr>
    <td><div class="nv-stroke7 swatch"></div></td><td><code>.nv-stroke7 { stroke:#7f7f7f; }</code></td>
  </tr>
  <tr>
    <td><div class="nv-stroke8 swatch"></div></td><td><code>.nv-stroke8 { stroke:#bcbd22; }</code></td>
  </tr>
  <tr>
    <td><div class="nv-stroke9 swatch"></div></td><td><code>.nv-stroke9 { stroke:#17becf; }</code></td>
  </tr>
</table>
        </div>

        <div class="span6">
          <h3>Creating New Chart Color Themes</h3>

          <div class="alert alert-info">
            <p>New chart color themes are created in the <code>/styleguide/themes/clients/base</code> directory. Copy the <code>/default</code> folder and rename. Inside this folder, edit the variables.less file. In the CHART section, edit the @fillXX and @strokeXX LESS variables as needed. Then go to the Bootstrap Builder at <a href="../build/">/styleguide/build/</a>, choose your new theme folder and click the "Compile" button. Your new chart color theme will be available.</p>
            <p>Your new chart color theme will be visible in the charts on this page. To enable the use of chart color CSS classes, set the <code>.colorData( \'class\' )</code> property in your chart definition (see example above). Custom SVG gradient fills in CSS are not supported.</p>
          </div>
        </div>
      </div>
    </section>

  </div>

  <script>
    var gauge_data_1 = {
      \'properties\': {
        \'title\': \'Closed Won Opportunities Gauge\',
        \'value\': 4
      },
      \'data\': [
        {
          key: "Range 1"
          , y: 3
        },
        {
          key: "Range 2"
          , y: 5
        },
        {
          key: "Range 3"
          , y: 7
        },
        {
          key: "Range 4"
          , y: 9
        }
      ]
    };

    var gauge_data_2 = {
      \'properties\': {
        \'title\': \'Closed Won Opportunities Gauge\',
        \'value\': 4
      },
      \'data\': [
        {
          key: "Range 1"
          , y: 3
          , color: "#d62728"
        },
        {
          key: "Range 2"
          , y: 5
          , color: "#ff7f0e"
        },
        {
          key: "Range 3"
          , y: 7
          , color: "#bcbd22"
        },
        {
          key: "Range 4"
          , y: 9
          , color: "#2ca02c"
        }
      ]
    };

    var gauge_data_3 = {
      \'properties\': {
        \'title\': \'Closed Won Opportunities Gauge\',
        \'value\': 4
      },
      \'data\': [
        {
          key: "Range 1"
          , y: 3
          , class: "nv-fill07"
        },
        {
          key: "Range 2"
          , y: 5
          , class: "nv-fill03"
        },
        {
          key: "Range 3"
          , y: 7
          , class: "nv-fill17"
        },
        {
          key: "Range 4"
          , y: 9
          , class: "nv-fill05"
        }
      ]
    };
  </script>

  <script>
    // Gauge Chart
    nv.addGraph(function() {
      var gauge = nv.models.gaugeChart()
          .x(function(d) { return d.key })
          .y(function(d) { return d.y })
          .showLabels(true)
          .showTitle(true)
          .colorData( \'default\' )
          .ringWidth(50)
          .maxValue(9)
          .transitionMs(4000);

      d3.select("#gauge1 svg")
          .datum(gauge_data_1)
          .call(gauge);

      //nv.utils.windowResize(gauge.update);
      return gauge;
    });

    nv.addGraph(function() {
      var gauge = nv.models.gaugeChart()
          .x(function(d) { return d.key })
          .y(function(d) { return d.y })
          .showLabels(true)
          .showTitle(true)
          .colorData( \'default\', {gradient:true} )
          .ringWidth(50)
          .maxValue(9)
          .transitionMs(4000);

      d3.select("#gauge2 svg")
          .datum(gauge_data_1)
        .transition().duration(500)
          .call(gauge);

      //nv.utils.windowResize(gauge.update);
      return gauge;
    });

    nv.addGraph(function() {
      var gauge = nv.models.gaugeChart()
          .x(function(d) { return d.key })
          .y(function(d) { return d.y })
          .showLabels(true)
          .showTitle(true)
          .colorData( \'default\' )
          .ringWidth(50)
          .maxValue(9)
          .transitionMs(4000);

      d3.select("#gauge3 svg")
          .datum(gauge_data_2)
        .transition().duration(500)
          .call(gauge);

      return gauge;
    });

    nv.addGraph(function() {
      var gauge = nv.models.gaugeChart()
          .x(function(d) { return d.key })
          .y(function(d) { return d.y })
          .showLabels(true)
          .showTitle(true)
          .colorData( \'default\', {gradient:true} )
          .ringWidth(50)
          .maxValue(9)
          .transitionMs(4000);

      d3.select("#gauge4 svg")
          .datum(gauge_data_2)
        .transition().duration(500)
          .call(gauge);

      return gauge;
    });

    nv.addGraph(function() {
      var gauge = nv.models.gaugeChart()
          .x(function(d) { return d.key })
          .y(function(d) { return d.y })
          .showLabels(true)
          .showTitle(true)
          .colorData( \'graduated\', {c1: \'#e8e2ca\', c2: \'#3e6c0a\', l: gauge_data_1.data.length} )
          .ringWidth(50)
          .maxValue(9)
          .transitionMs(4000);

      d3.select("#gauge5 svg")
          .datum(gauge_data_1)
        .transition().duration(500)
          .call(gauge);

      return gauge;
    });

    nv.addGraph(function() {
      var gauge = nv.models.gaugeChart()
          .x(function(d) { return d.key })
          .y(function(d) { return d.y })
          .showLabels(true)
          .showTitle(true)
          .colorData( \'graduated\', {c1: \'#e8e2ca\', c2: \'#3e6c0a\', l: gauge_data_1.data.length, gradient:true} )
          .ringWidth(50)
          .maxValue(9)
          .transitionMs(4000);

      d3.select("#gauge6 svg")
          .datum(gauge_data_1)
        .transition().duration(500)
          .call(gauge);

      //nv.utils.windowResize(gauge.update);
      return gauge;
    });


    nv.addGraph(function() {
      var gauge = nv.models.gaugeChart()
          .x(function(d) { return d.key })
          .y(function(d) { return d.y })
          .showLabels(true)
          .showTitle(true)
          .colorData( \'class\' )
          .ringWidth(50)
          .maxValue(9)
          .transitionMs(4000);

      d3.select("#gauge7 svg")
          .datum(gauge_data_1)
        .transition().duration(500)
          .call(gauge);

      return gauge;
    });

    nv.addGraph(function() {
      var gauge = nv.models.gaugeChart()
          .x(function(d) { return d.key })
          .y(function(d) { return d.y })
          .showLabels(true)
          .showTitle(true)
          .colorData( \'class\', {gradient:true} )
          .ringWidth(50)
          .maxValue(9)
          .transitionMs(4000);

      d3.select("#gauge8 svg")
          .datum(gauge_data_3)
        .transition().duration(500)
          .call(gauge);

      //nv.utils.windowResize(gauge.update);
      return gauge;
    });
  </script>

',
      'base_responsive' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}

<section id="responsive-design">
  <div class="page-header">
    <h1>Responsive design <small>Media queries for various devices and resolutions</small></h1>
  </div>
  <!-- Supported devices -->
  <div class="row">
    <div class="span4">
      <img src="styleguide/content/img/responsive-illustrations.png" alt="Responsive devices">
    </div>
    <div class="span8">
      <h2>Supported devices</h2>
      <p>Supports a handful of media queries to help make your projects more appropriate on different devices and screen resolutions. Here\'s what\'s included:</p>
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Label</th>
            <th>Layout width</th>
            <th>Column width</th>
            <th>Gutter width</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Smartphones</td>
            <td>480px and below</td>
            <td class="muted" colspan="2">Fluid columns, no fixed widths</td>
          </tr>
          <tr>
            <td>Portrait tablets</td>
            <td>480px to 768px</td>
            <td class="muted" colspan="2">Fluid columns, no fixed widths</td>
          </tr>
          <tr>
            <td>Landscape tablets</td>
            <td>768px to 980px</td>
            <td>44px</td>
            <td>20px</td>
          </tr>
          <tr>
            <td>Default</td>
            <td>980px and up</td>
            <td>60px</td>
            <td>20px</td>
          </tr>
          <tr>
            <td>Large display</td>
            <td>1210px and up</td>
            <td>70px</td>
            <td>30px</td>
          </tr>
        </tbody>
      </table>

      <h3>What they do</h3>
      <p>Media queries allow for custom CSS based on a number of conditions&mdash;ratios, widths, display type, etc&mdash;but usually focuses around <code>min-width</code> and <code>max-width</code>.</p>
      <ul>
        <li>Modify the width of column in our grid</li>
        <li>Stack elements instead of float wherever necessary</li>
        <li>Resize headings and text to be more appropriate for devices</li>
      </ul>
    </div>
  </div>

  <br>

  <!-- Media query code -->
  <h2>Using the media queries</h2>
  <div class="row">
    <div class="span5">
      <p>The framework doesn\'t automatically include these media queries, but understanding and adding them is very easy and requires minimal setup. You have a few options for including the responsive features:</p>
      <ol>
        <li>Use the compiled responsive version, bootstrap-responsive.css</li>
        <li>Add @import "responsive.less" and recompile</li>
        <li>Modify and recompile responsive.less as a separate</li>
      </ol>
      <p><strong>Why not just include it?</strong> Truth be told, not everything needs to be responsive. Instead of encouraging developers to remove this feature, we figure it best to enable it.</p>
    </div>
    <div class="span7">
<pre class="prettyprint linenums">
// Landscape phones and down
@media (max-width: 480px) { ... }

// Landscape phone to portrait tablet
@media (max-width: 768px) { ... }

// Portrait tablet to landscape and desktop
@media (min-width: 768px) and (max-width: 980px) { ... }

// Large desktop
@media (min-width: 1200px) { .. }
</pre>
    </div>
  </div>
</section>
',
      'components_tooltips' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
<!-- Tooltips
================================================== -->
<section id="tooltips">
  <div class="page-header">
    <h1>Tooltips <small>bootstrap-tooltip.js</small></h1>
  </div>
  <div class="row-fluid">
    <div class="span3 columns">
      <h3>About Tooltips</h3>
      <p>Inspired by the excellent jQuery.tipsy plugin written by Jason Frame; Tooltips are an updated version, which don\'t rely on images, uss css3 for animations, and data-attributes for local title storage.</p>
      <p>The bootsrap-tooltip.js plugin is included in the default build of SugarCRM.</p>
      <div class="alert alert-info">
        <strong>Heads up!</strong> For performance reasons, the tooltip and popover data-apis are opt in, meaning <strong>you must initialize them yourself</strong>.
      </div>
    </div>
    <div class="span9 columns">

          <h2>Examples</h2>

          <p>Hover over the links below to see tooltips:</p>
          <div class="bs-docs-example tooltip-demo">
            <p class="muted" style="margin-bottom: 0;">Tight pants next level keffiyeh <a href="#" rel="tooltip" title="Default tooltip">you probably</a> haven\'t heard of them. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney\'s fixie sustainable quinoa 8-bit american apparel <a href="#" rel="tooltip" title="Another tooltip">have a</a> terry richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney\'s cleanse vegan chambray. A really ironic artisan <a href="#" rel="tooltip" title="A much longer tooltip belongs right here to demonstrate the max-width we apply.">whatever keytar</a>, scenester farm-to-table banksy Austin <a href="#" rel="tooltip" title="The last tip!">twitter handle</a> freegan cred raw denim single-origin coffee viral.</p>
          </div>

          <h3>Four directions</h3>
          <div class="bs-docs-example tooltip-demo">
            <ul class="bs-docs-tooltip-examples">
              <li><a href="#" rel="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</a></li>
              <li><a href="#" rel="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</a></li>
              <li><a href="#" rel="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</a></li>
              <li><a href="#" rel="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</a></li>
            </ul>
          </div>


          <h3>Tooltips in input groups</h3>
          <p>When using tooltips and popovers with the Bootstrap input groups, you\'ll have to set the <code>container</code> (documented below) option to avoid unwanted side effects.</p>

          <hr class="bs-docs-separator">


          <h2>Basic Usage</h2>

          <p>Markup elements:</p>
          <pre class="prettyprint linenums">
&lt;div id="example"&gt;
  &lt;a href="#" rel="tooltip" title="first tooltip"&gt;hover over me&lt;/a&gt;
&lt;/div&gt;
          </pre>
          <p>Trigger the tooltip via JavaScript:</p>
          <pre class="prettyprint linenums">
$(\'#example\').tooltip({selector: \'[rel="tooltip"]\'});
$(\'[rel=tooltip]\').tooltip();
          </pre>


          <h2>Sugar7 Implementation</h2>
          <p>Markup elements (in .hbs):</p>
          <pre class="prettyprint linenums">
&lt;a class="btn btn-mini comment" rel="tooltip" data-title="Comment"&gt;
    &lt;i class="icon-comment"&gt;&lt;/i&gt;
&lt;/a&gt;
          </pre>

          <p>Initialize tooltip (in .js):</p>
          <pre class="prettyprint linenums">
    events: {
        \'mouseenter [rel="tooltip"]\': \'showTooltip\',
        \'mouseleave [rel="tooltip"]\': \'hideTooltip\'
    },

    showTooltip: function(e) {
        this.$(e.currentTarget).tooltip("show");
    },

    hideTooltip: function(e) {
        this.$(e.currentTarget).tooltip("hide");
    },

    unbindDom: function() {
        // Unbind all tooltips on page
        var unbindTooltips = _.bind(function(sel) {
            this.$(sel).each(function() {
                $(this).tooltip(\'destroy\');
            });
        }, this);
        unbindTooltips(\'[rel="tooltip"]\');

        app.view.Field.prototype.unbindDom.call(this);
    }
          </pre>
      <div class="alert alert-info">
        <strong>Heads up!</strong> Either use the "title" or "data-title" attribute on elements you wish to use tooltips. The "title" attribute is removed by tooltips.js and replace with "data-title-original".
      </div>
          <h3>Options</h3>
          <p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-</code>, as in <code>data-animation=""</code>.</p>
          <table class="table table-bordered table-striped">
            <thead>
             <tr>
               <th style="width: 100px;">Name</th>
               <th style="width: 100px;">type</th>
               <th style="width: 50px;">default</th>
               <th>description</th>
             </tr>
            </thead>
            <tbody>
             <tr>
               <td>animation</td>
               <td>boolean</td>
               <td>true</td>
               <td>apply a css fade transition to the tooltip</td>
             </tr>
             <tr>
               <td>html</td>
               <td>boolean</td>
               <td>false</td>
               <td>Insert html into the tooltip. If false, jquery\'s <code>text</code> method will be used to insert content into the dom. Use text if you\'re worried about XSS attacks.</td>
             </tr>
             <tr>
               <td>placement</td>
               <td>string | function</td>
               <td>\'top\'</td>
               <td>how to position the tooltip - top | bottom | left | right</td>
             </tr>
             <tr>
               <td>selector</td>
               <td>string</td>
               <td>false</td>
               <td>If a selector is provided, tooltip objects will be delegated to the specified targets.</td>
             </tr>
             <tr>
               <td>title</td>
               <td>string | function</td>
               <td>\'\'</td>
               <td>default title value if `title` tag isn\'t present</td>
             </tr>
             <tr>
               <td>trigger</td>
               <td>string</td>
               <td>\'hover focus\'</td>
               <td>how tooltip is triggered - click | hover | focus | manual. Note you case pass trigger mutliple, space seperated, trigger types.</td>
             </tr>
             <tr>
               <td>delay</td>
               <td>number | object</td>
               <td>0</td>
               <td>
                <p>delay showing and hiding the tooltip (ms) - does not apply to manual trigger type</p>
                <p>If a number is supplied, delay is applied to both hide/show</p>
                <p>Object structure is: <code>delay: { show: 500, hide: 100 }</code></p>
               </td>
             </tr>
             <tr>
               <td>container</td>
               <td>string | false</td>
               <td>false</td>
               <td>
                <p>Appends the tooltip to a specific element <code>container: \'body\'</code></p>
               </td>
             </tr>
            </tbody>
          </table>
          <div class="alert alert-info">
            <strong>Heads up!</strong>
            Options for individual tooltips can alternatively be specified through the use of data attributes.
          </div>

          <h3>Methods</h3>
          <h4>$().tooltip(options)</h4>
          <p>Attaches a tooltip handler to an element collection.</p>
          <h4>.tooltip(\'show\')</h4>
          <p>Reveals an element\'s tooltip.</p>
          <pre class="prettyprint linenums">$(\'#element\').tooltip(\'show\')</pre>
          <h4>.tooltip(\'hide\')</h4>
          <p>Hides an element\'s tooltip.</p>
          <pre class="prettyprint linenums">$(\'#element\').tooltip(\'hide\')</pre>
          <h4>.tooltip(\'toggle\')</h4>
          <p>Toggles an element\'s tooltip.</p>
          <pre class="prettyprint linenums">$(\'#element\').tooltip(\'toggle\')</pre>
          <h4>.tooltip(\'destroy\')</h4>
          <p>Hides and destroys an element\'s tooltip.</p>
          <pre class="prettyprint linenums">$(\'#element\').tooltip(\'destroy\')</pre>

    </div>
  </div>
</section>
',
      'layouts_wizard' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
<script src="styleguide/content/wizard.js"></script>

<!-- Wizard Modal
================================================== -->
<section id="wizard">
    <div class="page-header">
        <h1>Wizard <small>wizard.js</small></h1>
    </div>
    <div class="row-fluid">
        <div class="span3 columns">
            <h3>About Wizard</h3>
            <p>Wizard takes advantage of bootstrap modals and sets up a framework for taking a user through multiple steps to complete a task.</p>
            <p>The wizard.js plugin is NOT included in the default build of SugarCRM.</p>
            {{! <a href="js/wizard.js" target="_blank" class="btn">Download file</a> }}
        </div>
        <div class="span9 columns">

            <h2>Live demo</h2>
            <p>View demo of a standard wizard</p>

            <a href="#" class="btn btn-primary btn-large" id="launch_simple_wizard">Launch a simple demo wizard</a>

            <hr>

            <h2>Using Wizard</h2>
            <p>Initialize the wizard via javascript:</p>
            <pre class="prettyprint linenums">
                $("#launch_simple_wizard").on(\'click\', function() {
                    wizard.init({
                        id: \'wizardDemo\',
                        modalUrl: "wizard.html",
                        headerText: "Wizard Demo",
                        navMenu: new Array("Screen Two","Screen Screen Three","Screen Four")
                });</pre>
            <h3>Markup for wizard.html</h3>

            <pre class="prettyprint linenums">
&lt;div class="modal-content modal-scroll"&gt;
    &lt;form&gt;

        &lt;div class="screen screen1" style="display: block;"&gt;
            Welcome Screen
        &lt;/div&gt;

        &lt;div class="screen screen2"&gt;
            Screen Two
        &lt;/div&gt;

        &lt;div class="screen screen3"&gt;
            Screen Three
        &lt;/div&gt;

        &lt;div class="screen screen4"&gt;
            Screen Four
        &lt;/div&gt;
    &lt;/form&gt;
&lt;/div&gt;
            </pre>

            <h3>Parameters</h3>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th style="width: 100px;">Name</th>
                    <th style="width: 50px;">type</th>
                    <th>description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>id</td>
                    <td>string</td>
                    <td>wizard id</td>
                </tr>
                <tr>
                    <td>modalUrl</td>
                    <td>string</td>
                    <td>path to content data</td>
                </tr>
                <tr>
                    <td>headerText</td>
                    <td>string</td>
                    <td>text to display in wizard header</td>
                </tr>
                <tr>
                    <td>navMenu</td>
                    <td>array</td>
                    <td>array containing navigation menu items</td>
                </tr>
                <tr>
                    <td>defaults</td>
                    <td>object</td>
                    <td>object containing optional settings</td>
                </tr>
                </tbody>
            </table>

            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th style="width: 150px;">Event</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>onWizardStart</td>
                    <td>This event fires immediately after wizard is initialized.</td>
                </tr>
                </tbody>
            </table>

            <h2>Live demo</h2>
            <p>View demo of a wizard with customized footer and standard navigation</p>
            <a href="#" class="btn btn-primary btn-large" id="launch_wizard">Launch a customized demo wizard</a>
            <hr>

            <pre class="prettyprint linenums">
$("#launch_wizard").on(\'click\', function() {
    wizard.init({
        id: \'wizardDemo\',
        modalUrl: "wizard.html",
        headerText: "Wizard Demo",
        navMenu: new Array("Screen Two","Screen Screen Three","Screen Four"),
        \'onWizardStart\': function () {
            $(\'#wizardDemo .start\').live("click", function(){
                $("#wizardDemo .manual").css("display","none");
            });
        },
        defaults: {
            className: \'setup\',
            startText: "Setup Wizard",
            \'footer\': function () {
                return \'&lt;div class="modal-footer"&gt;\' +
                \'&lt;a href="#" class="btn btn-invisible btn-link pull-left cancel"&gt;\'+ this.cancelText+\'&lt;/a&gt;\' +
                \'&lt;a class="btn back" href="#"&gt;\'+ this.backText+\'&lt;/a&gt;\' +
                \'&lt;a class="btn btn-primary next" href="#"&gt;\'+ this.nextText+\'&lt;/a&gt;\' +
                \'&lt;a class="btn btn-primary finish" href="#"&gt;\'+ this.finishText+\'&lt;/a&gt;\' +
                \'&lt;a href="#" class="btn manual">Manual Setup&lt;/a&gt;\' +
                \'&lt;a class="btn btn-primary start" href="#"&gt;\'+ this.startText+\'&lt;/a&gt;\' +
                \'&lt;/div&gt;\';
            }
        }
    });
});
            </pre>
        </div>
    </div>
</section>
',
      'components_progress' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
<!-- Progress bars
================================================== -->
<section id="progress-bars">
  <div class="page-header">
    <h1>Progress bars <small>For loading, redirecting, or action status</small></h1>
  </div>

  <h2>Examples and markup</h2>
  <div class="row-fluid">
    <div class="span4">
      <h3>Basic</h3>
      <p>Default progress bar with a vertical gradient.</p>
      <div class="progress">
        <div class="bar" style="width: 60%;"></div>
      </div>
      <br>
<pre class="prettyprint linenums">
&lt;div class="progress"&gt;
  &lt;div class="bar"
       style="width: 60%;"&gt;&lt;/div&gt;
&lt;/div&gt;
</pre>
    </div>
    <div class="span4">
      <h3>Striped</h3>
      <p>Uses a gradient to create a striped effect.</p>
      <div class="progress progress-info progress-striped">
        <div class="bar" style="width: 20%;"></div>
      </div>
      <br>
<pre class="prettyprint linenums">
&lt;div class="progress progress-info
     progress-striped"&gt;
  &lt;div class="bar"
       style="width: 20%;"&gt;&lt;/div&gt;
&lt;/div&gt;
</pre>
    </div>
    <div class="span4">
      <h3>Animated</h3>
      <p>Takes the striped example and animates it.</p>
      <div class="progress progress-success progress-striped active">
        <div class="bar" style="width: 45%"></div>
      </div>
      <br>
<pre class="prettyprint linenums">
&lt;div class="progress progress-success
     progress-striped active"&gt;
  &lt;div class="bar"
       style="width: 40%;"&gt;&lt;/div&gt;
&lt;/div&gt;
</pre>
    </div>
  </div>

  <h2>Options and browser support</h2>
  <div class="row-fluid">
    <div class="span4">
      <h3>Additional colors</h3>
      <p>Progress bars utilize some of the same class names as buttons and alerts for similar styling.</p>
      <ul>
        <li><code>.progress-info</code></li>
        <li><code>.progress-success</code></li>
        <li><code>.progress-danger</code></li>
      </ul>
      <p>Alternatively, you can customize the LESS files and roll your own colors and sizes.</p>
    </div>
    <div class="span4">
      <h3>Behavior</h3>
      <p>Progress bars use CSS3 transitions, so if you dynamically adjust the width via javascript, it will smoothly resize.</p>
      <p>If you use the <code>.active</code> class, your <code>.progress-striped</code> progress bars will animate the stripes left to right.</p>
    </div>
    <div class="span4">
      <h3>Browser support</h3>
      <p>Progress bars use CSS3 gradients, transitions, and animations to achieve all their effects. These features are not supported in IE7-8 or older versions of Firefox.</p>
      <p>Opera does not support animations at this time.</p>
    </div>
  </div>

</section>
',
      'forms_datetime' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
<section id="datepicker">
  <div class="page-header">
    <h1>Date/time picker <small>bootstrap-datepicker.js</small>, <small>jquery.timepicker.js</small></h1>
  </div>

  <div class="row-fluid">
    <div class="span3 columns">
      <h3>About</h3>
      <p>Add a time/date picker UI to a field or to any other element.</p>
      <ul>
        <li>Datepicker [<a href="#usage">usage</a>]</li>
        <ul>
          <li>can be used as a component</li>
          <li>formats: dd, d, mm, m, yyyy, yy</li>
          <li>separators: -, /, .</li>
        </ul>
        <li>Timepicker [<a href="#usage">usage</a>]</li>
        <ul>
          <li>formats: uses <a href="http://php.net/manual/en/function.date.php">PHP date formatting</a>
          <li>separators: :, ., -</li>
        </ul>
      </ul>
      <p>The bootstrap-datepicker.js [<a href="http://www.eyecon.ro/bootstrap-datepicker/"><i class="icon-book"></i> Datepicker Docs</a>] and jquery.timepicker.js [<a href="http://jonthornton.github.com/jquery-timepicker//"><i class="icon-book"></i> Timepicker Docs</a>] plugins are included in the default build of SugarCRM.</p>
    </div>

    <div class="span9 columns">
      <h2>Sugar7 Examples</h2>

      <p>Date field rendered with default values in edit mode.</p>
      <div class="well" id="sugar7_date">
      </div>
      <p>Datetimecombo field rendered with default values in edit mode.</p>
      <div class="well" id="sugar7_datetimecombo">
      </div>

      <p>View the <a href="#Styleguide/field/date">date test page</a> for all rendering modes.</p>

      <h2>Static Examples</h2>

      <p>Attached to a field with default formatting.</p>
      <div class="well">
        <input type="text" class="span2" value="" placeholder="mm-dd-yyyy" id="dp1" rel="datepicker">
        <input type="text" class="span2" placeholder="hh:mm" id="tp1" rel="timepicker">
      </div>
      <pre class="prettyprint">
&lt;input type="text" class="span2" value="" placeholder="mm-dd-yyyy" id="dp1" rel="datepicker"&gt;
&lt;input type="text" class="span2" placeholder="hh:mm" id="tp1" rel="timepicker"&gt;

$(\'#dp1\').datepicker();
$(\'#tp1\').timepicker();</pre>

      <p>Attached to a field with custom formatting - date and time format specified in options.</p>
      <div class="well">
        <input type="text" class="span2" value="" placeholder="mm-dd-yyyy" data-date-format="mm/dd/yy" id="dp2" rel="datepicker">
        <input type="text" class="span2" placeholder="hh.mm.ss" id="tp2" rel="timepicker">
      </div>
      <pre class="prettyprint">
&lt;input type="text" class="span2" value="" placeholder="mm-dd-yyyy" data-date-format="mm/dd/yy" id="dp2" rel="datepicker"&gt;
&lt;input type="text" class="span2" placeholder="hh.mm.ss" id="tp2" rel="timepicker"&gt;

$(\'#dp2\').datepicker({format: \'mm-dd-yyyy\'});
$(\'#tp2\').timepicker({timeFormat:\'H.i.s\'});</pre>

      <p>Date picker as component - format specified via data tag .</p>
      <div class="well">
        <div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="mm-dd-yyyy" rel="datepicker">
          <input class="span2" size="16" type="text" value="" placeholder="mm-dd-yyyy">
          <span class="add-on"><i class="icon-calendar"></i></span>
        </div>
      </div>
      <pre class="prettyprint">
&lt;div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="mm-dd-yyyy" rel="datepicker"&gt;
  &lt;input class="span2" size="16" type="text" value="" placeholder="mm-dd-yyyy"&gt;
  &lt;span class="add-on"&gt;&lt;i class="icon-calendar">&lt;/i&gt;&lt;/span&gt;
&lt;/div&gt;

$(\'#dp3\').datepicker();</pre>

      <p>Date picker attached to other element then field and using events to work with the date values.</p>
      <div class="well">
        <div class="alert alert-error hide" id="alert">
          <strong>Oh snap!</strong>
        </div>
        <div class="row-fluid">
          <div class="span6"><b>Start date: </b><span id="startDate">2012-02-20</span></div>
          <div class="span6"><b>End date: </b><span id="endDate">2012-02-25</span></div>
        </div>
        <div class="row-fluid">
          <div class="span6" style="position:relative"><a href="#" class="btn small" id="dp4" data-date-format="yyyy-mm-dd" data-date="2012-02-20">Change</a></div>
          <div class="span6" style="position:relative"><a href="#" class="btn small" id="dp5" data-date-format="yyyy-mm-dd" data-date="2012-02-25">Change</a></div>
        </div>
      </div>
      <pre class="prettyprint">
var startDate = new Date(2012,1,20);
var endDate = new Date(2012,1,25);

$(\'#dp4\').datepicker()
  .on(\'changeDate\', function(ev){
    if (ev.date.valueOf() > endDate.valueOf()){
      $(\'#alert\').show().find(\'strong\').text(\'The start date can not be greater then the end date\');
    } else {
      $(\'#alert\').hide();
      startDate = new Date(ev.date);
      $(\'#startDate\').text($(\'#dp4\').data(\'date\'));
    }
    $(\'#dp4\').datepicker(\'hide\');
  });

$(\'#dp5\').datepicker()
  .on(\'changeDate\', function(ev){
    if (ev.date.valueOf() < startDate.valueOf()){
      $(\'#alert\').show().find(\'strong\').text(\'The end date can not be less then the start date\');
    } else {
      $(\'#alert\').hide();
      endDate = new Date(ev.date);
      $(\'#endDate\').text($(\'#dp5\').data(\'date\'));
    }
    $(\'#dp5\').datepicker(\'hide\');
  });</pre>

      <p>Time picker focused on current time.</p>
      <div class="well">
        <input type="text" class="span2" placeholder="hh:mm" id="tp3" rel="timepicker">
      </div>
      <pre class="prettyprint">
&lt;input type="text" class="span2" placeholder="hh:mm" id="tp3" rel="timepicker"&gt;

$(\'#tp3\').timepicker({\'scrollDefaultNow\': true});</pre>

      <p>Time picker with a button triggering current time.</p>
      <div class="well">
        <input id="tp4" type="text" class="span2" autocomplete="off">
        <button id="tp4_button" class="btn">Set current time</button>
      </div>
      <pre class="prettyprint">
&lt;input id="tp4" type="text" class="span2" autocomplete="off"&gt;
&lt;button id="tp4_button" class="btn" style="margin-bottom:9px"&gt;Set current time&lt;/button&gt;

$(\'#tp4\').timepicker();
$(\'#tp4_button\').on(\'click\', function (){
  $(\'#tp4\').timepicker(\'setTime\', new Date());
});</pre>

      <p>Time picker with custom start/end point and duration</p>
      <div class="well">
        <input id="tp5" type="text" class="span2" autocomplete="off">
      </div>
      <pre class="prettyprint">
&lt;input id="tp5" type="text" class="span2" autocomplete="off"&gt;

$(\'#tp5\').timepicker({
  \'minTime\': \'2:00pm\',
  \'maxTime\': \'6:00pm\',
  \'showDuration\': true
});</pre>

      <p>Time picker showing trigger an event after time selected</p>
      <div class="well">
<input id="tp6" type="text" class="span2" autocomplete="off">
<span id="tp6_legend"></span>
      </div>
      <pre class="prettyprint">
&lt;input id="tp6" type="text" class="span2" autocomplete="off"&gt;
&lt;span id="tp6_legend"&gt;&lt;/span&gt;

$(\'#tp6\').timepicker();
$(\'#tp6\').on(\'changeTime\', function() {
  $(\'#tp6_legend\').text(\'You selected: \' + $(this).val());
});</pre>

      <p>Time picker customizing time steps</p>
      <div class="well">
        <input id="tp7" type="text" class="span2" autocomplete="off">
      </div>
      <pre class="prettyprint">
&lt;input id="tp7" type="text" class="span2" autocomplete="off"&gt;

$(\'#tp7\').timepicker({ \'step\': 5 });</pre>

    </div>
  </div>

  <h2 id="usage">Usage</h2>

  <div class="row-fluid">
    <div class="span6">
      <h3>Datepicker markup</h3>
      <p>Format a component.</p>
      <pre class="prettyprint linenums">
&lt;div class=&quot;input-append date&quot; id=&quot;dp3&quot; data-date=&quot;12-02-2012&quot; data-date-format=&quot;dd-mm-yyyy&quot; rel=&quot; datepicker&quot;&gt;
&lt;input class=&quot;span2&quot; size=&quot;16&quot; type=&quot;text&quot; value=&quot;12-02-2012&quot;&gt;
&lt;span class=&quot;add-on&quot;&gt;&lt;i class=&quot;icon-th&quot;&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/div&gt;</pre>
    </div>
    <div class="span6">
      <h3>Timepicker markup</h3>
      <p>Format a component.</p>
      <pre class="prettyprint linenums">
&lt;input type=&quot;text&quot; class=&quot;span2&quot; placeholder=&quot;hh:mm&quot; id=&quot;tp1&quot; rel=&quot;timepicker&quot;&gt;</pre>
    </div>
  </div>


  <div class="row-fluid">
    <div class="span6">
      <h3>Methods</h3>
      <p>Initializes a datepicker.</p>
      <pre class="prettyprint linenums">$(\'[rel=datepicker]\').datepicker(options)</pre>
    </div>
    <div class="span6">
      <h3>Methods</h3>
      <p>Initializes a timepicker.</p>
      <pre class="prettyprint linenums">$(\'[rel=timepicker]\').timepicker(options)</pre>
    </div>
  </div>


  <div class="row-fluid">
    <div class="span6">
      <h3>Events</h3>
      <p>Datepicker class exposes a few events for manipulating the dates.</p>
      <table class="table table-bordered table-striped">
        <thead>
         <tr>
           <th style="width: 150px;">Event</th>
           <th>Description</th>
         </tr>
        </thead>
        <tbody>
         <tr>
           <td>show</td>
           <td>This event fires immediately when the date picker is displayed.</td>
         </tr>
         <tr>
           <td>hide</td>
           <td>This event is fired immediately when the date picker is hidden.</td>
         </tr>
         <tr>
           <td>changeDate</td>
           <td>This event is fired when the date is changed.</td>
         </tr>
        </tbody>
      </table>
      <pre class="prettyprint linenums">
$(&#039;#dpX&#039;).datepicker()
  .on(&#039;changeDate&#039;, function(ev){
    if (ev.date.valueOf() &lt; startDate.valueOf()){
      ....
    }
  });</pre>
      <h3>Options</h3>
      <table class="table table-bordered table-striped">
        <thead>
         <tr>
           <th style="width: 100px;">Name</th>
           <th style="width: 50px;">type</th>
           <th style="width: 100px;">default</th>
           <th>description</th>
         </tr>
        </thead>
        <tbody>
          <tr>
           <td>format</td>
           <td>string</td>
           <td>\'mm/dd/yyyy\'</td>
           <td>the date format, combination of  d, dd, m, mm, yy, yyy.</td>
         </tr>
          <tr>
           <td>weekStart</td>
           <td>integer</td>
           <td>0</td>
           <td>day of the week start. 0 for Sunday -  6 for Saturday</td>
         </tr>
        </tbody>
      </table>
    </div>
    <div class="span6">
      <h3>Events</h3>
      <p>Timepicker class exposes a singel events for manipulating the times.</p>
      <table class="table table-bordered table-striped">
        <thead>
         <tr>
           <th style="width: 150px;">Event</th>
           <th>Description</th>
         </tr>
        </thead>
        <tbody>
         <tr>
           <td>changeTime</td>
           <td>Trigger an event after selecting a value.</td>
         </tr>
        </tbody>
      </table>
      <pre class="prettyprint linenums">
$(&#039;#tpX&#039;).on(&#039;changeTime&#039;, function() {
  $(&#039;#timeDisplay&#039;).text($(this).val());
});</pre>
      <h3>Options</h3>
      <table class="table table-bordered table-striped">
        <thead>
         <tr>
           <th style="width: 50px;">name</th>
           <th style="width: 100px;">value</th>
           <th>description</th>
         </tr>
        </thead>
        <tbody>
          <tr>
            <td>timeFormat</td>
            <td>\'H:i:s\'</td>
            <td>Set scroll position to local time (<a href="http://php.net/manual/en/function.date.php">PHP formatting</a>)</td>
          </tr>
          <tr>
            <td>scrollDefaultNow</td>
            <td>true</td>
            <td>Set scroll position to local time</td>
          </tr>
          <tr>
            <td>minTime</td>
            <td>\'2:30pm\'</td>
            <td>Set starting time</td>
          </tr>
          <tr>
            <td>maxTime</td>
            <td>\'11:30pm\'</td>
            <td>Set end time</td>
          </tr>
          <tr>
            <td>showDuration</td>
            <td>true</td>
            <td>Show duration between time intervals</td>
          </tr>
          <tr>
            <td>step</td>
            <td>15</td>
            <td>Set length of time</td>
         </tr>
        </tbody>
      </table>
    </div>
  </div>

</section>
',
      'forms_buttons' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}

<!-- Buttons
================================================== -->
<section id="buttons">
  <div class="page-header">
    <h1>Buttons</h1>
  </div>

  <h2>One class, multiple tags</h2>
  <p>Use the <code>.btn</code> class on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.</p>
  <form class="bs-docs-example">
    <a class="btn" href="">Link</a>
    <button class="btn" type="submit">Button</button>
    <input class="btn" type="button" value="Input">
    <input class="btn" type="submit" value="Submit">
  </form>
<pre class="prettyprint linenums">
&lt;a class="btn" href=""&gt;Link&lt;/a&gt;
&lt;button class="btn" type="submit"&gt;Button&lt;/button&gt;
&lt;input class="btn" type="button" value="Input"&gt;
&lt;input class="btn" type="submit" value="Submit"&gt;
</pre>
  <p>As a best practice, try to match the element for your context to ensure matching cross-browser rendering. If you have an <code>input</code>, use an <code>&lt;input type="submit"&gt;</code> for your button.</p>

  <h2>Default buttons</h2>
  <p>Button styles can be applied to anything with the <code>.btn</code> class applied. However, typically you\'ll want to apply these to only <code>&lt;a&gt;</code> and <code>&lt;button&gt;</code> elements for the best rendering.</p>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Button</th>
        <th>class=""</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><button type="button" class="btn">Default</button></td>
        <td><code>btn</code></td>
        <td>Standard gray button with gradient</td>
      </tr>
      <tr>
        <td><button type="button" class="btn btn-primary">Primary</button></td>
        <td><code>btn btn-primary</code></td>
        <td>Provides extra visual weight and identifies the primary action in a set of buttons</td>
      </tr>
      <tr>
        <td><button type="button" class="btn btn-info">Info</button></td>
        <td><code>btn btn-info</code></td>
        <td>Used as an alternative to the default styles</td>
      </tr>
      <tr>
        <td><button type="button" class="btn btn-success">Success</button></td>
        <td><code>btn btn-success</code></td>
        <td>Indicates a successful or positive action</td>
      </tr>
      <tr>
        <td><button type="button" class="btn btn-warning">Warning</button></td>
        <td><code>btn btn-warning</code></td>
        <td>Indicates caution should be taken with this action</td>
      </tr>
      <tr>
        <td><button type="button" class="btn btn-danger">Danger</button></td>
        <td><code>btn btn-danger</code></td>
        <td>Indicates a dangerous or potentially negative action</td>
      </tr>
      <tr>
        <td><button type="button" class="btn btn-inverse">Inverse</button></td>
        <td><code>btn btn-inverse</code></td>
        <td>Alternate dark gray button, not tied to a semantic action or use</td>
      </tr>
      <tr>
        <td><button type="button" class="btn btn-link">Link</button></td>
        <td><code>btn btn-link</code></td>
        <td>Deemphasize a button by making it look like a link while maintaining button behavior</td>
      </tr>
    </tbody>
  </table>

  <h4>Cross browser compatibility</h4>
  <p>IE9 doesn\'t crop background gradients on rounded corners, so we remove it. Related, IE9 jankifies disabled <code>button</code> elements, rendering text gray with a nasty text-shadow that we cannot fix.</p>


  <h2>Button sizes</h2>
  <p>Fancy larger or smaller buttons? Add <code>.btn-large</code>, <code>.btn-small</code>, or <code>.btn-mini</code> for additional sizes.</p>
  <div class="bs-docs-example">
    <p>
      <button type="button" class="btn btn-large btn-primary">Large button</button>
      <button type="button" class="btn btn-large">Large button</button>
    </p>
    <p>
      <button type="button" class="btn btn-primary">Default button</button>
      <button type="button" class="btn">Default button</button>
    </p>
    <p>
      <button type="button" class="btn btn-small btn-primary">Small button</button>
      <button type="button" class="btn btn-small">Small button</button>
    </p>
    <p>
      <button type="button" class="btn btn-mini btn-primary">Mini button</button>
      <button type="button" class="btn btn-mini">Mini button</button>
    </p>
  </div>
<pre class="prettyprint linenums">
&lt;p&gt;
  &lt;button class="btn btn-large btn-primary" type="button"&gt;Large button&lt;/button&gt;
  &lt;button class="btn btn-large" type="button"&gt;Large button&lt;/button&gt;
&lt;/p&gt;
&lt;p&gt;
  &lt;button class="btn btn-primary" type="button"&gt;Default button&lt;/button&gt;
  &lt;button class="btn" type="button"&gt;Default button&lt;/button&gt;
&lt;/p&gt;
&lt;p&gt;
  &lt;button class="btn btn-small btn-primary" type="button"&gt;Small button&lt;/button&gt;
  &lt;button class="btn btn-small" type="button"&gt;Small button&lt;/button&gt;
&lt;/p&gt;
&lt;p&gt;
  &lt;button class="btn btn-mini btn-primary" type="button"&gt;Mini button&lt;/button&gt;
  &lt;button class="btn btn-mini" type="button"&gt;Mini button&lt;/button&gt;
&lt;/p&gt;
</pre>
  <p>Create block level buttons&mdash;those that span the full width of a parent&mdash; by adding <code>.btn-block</code>.</p>
  <div class="bs-docs-example">
    <div class="well" style="max-width: 400px; margin: 0 auto 10px;">
      <button type="button" class="btn btn-large btn-block btn-primary">Block level button</button>
      <button type="button" class="btn btn-large btn-block">Block level button</button>
    </div>
  </div>
<pre class="prettyprint linenums">
&lt;button class="btn btn-large btn-block btn-primary" type="button"&gt;Block level button&lt;/button&gt;
&lt;button class="btn btn-large btn-block" type="button"&gt;Block level button&lt;/button&gt;
</pre>


  <h2>Disabled state</h2>
  <p>Make buttons look unclickable by fading them back 50%.</p>

  <h3>Anchor element</h3>
  <p>Add the <code>.disabled</code> class to <code>&lt;a&gt;</code> buttons.</p>
  <p class="bs-docs-example">
    <a href="#" class="btn btn-large btn-primary disabled">Primary link</a>
    <a href="#" class="btn btn-large disabled">Link</a>
  </p>
<pre class="prettyprint linenums">
&lt;a href="#" class="btn btn-large btn-primary disabled"&gt;Primary link&lt;/a&gt;
&lt;a href="#" class="btn btn-large disabled"&gt;Link&lt;/a&gt;
</pre>
  <p>
    <span class="label label-info">Heads up!</span>
    We use <code>.disabled</code> as a utility class here, similar to the common <code>.active</code> class, so no prefix is required. Also, this class is only for aesthetic; you must use custom JavaScript to disable links here.
  </p>

  <h3>Button element</h3>
  <p>Add the <code>disabled</code> attribute to <code>&lt;button&gt;</code> buttons.</p>
  <p class="bs-docs-example">
    <button type="button" class="btn btn-large btn-primary disabled" disabled="disabled">Primary button</button>
    <button type="button" class="btn btn-large" disabled>Button</button>
  </p>
<pre class="prettyprint linenums">
&lt;button type="button" class="btn btn-large btn-primary disabled" disabled="disabled"&gt;Primary button&lt;/button&gt;
&lt;button type="button" class="btn btn-large" disabled&gt;Button&lt;/button&gt;
</pre>

  <h2>Invisible button background</h2>
  <p>Sometimes you want the same size, position and spacing options of a button without the background styling. This can be accomplished with the <code>.btn-invisible</code> class. This is often used for stand alone icons like the favorite star.</p>

  <p class="bs-docs-example">
    <a href="#" class="btn"><i class="icon-favorite"></i></a>
    <a href="#" class="btn btn-invisible"><i class="icon-favorite"></i></a>
  </p>
<pre class="prettyprint linenums">
    &lt;a href="#" class="btn"&gt;&lt;i class="icon-favorite"&gt;&lt;/i&gt;&lt;/a&gt;
    &lt;a href="#" class="btn btn-invisible"&gt;&lt;i class="icon-favorite"&gt;&lt;/i&gt;&lt;/a&gt;
</pre>

  <h2>Link style button</h2>
  <p>Sometimes you want the same size, position and spacing options of a button but have the button look like a link. This can be accomplished with the <code>.btn-invisible .btn-link</code> classes. This is often used to properly space a series of primary buttons and deemphasized secondary actions.</p>

  <p class="bs-docs-example">
    <a href="#" class="btn">Cancel</a>
    <a href="#" class="btn btn-invisible btn-link">Cancel</a>
  </p>
<pre class="prettyprint linenums">
    &lt;a href="#" class="btn"&gt;Cancel&lt;/a&gt;
    &lt;a href="#" class="btn btn-invisible btn-link"&gt;Cancel&lt;/a&gt;
</pre>
        </section>


<!-- Buttons
================================================== -->
<section id="buttons">
  <div class="page-header">
    <h1>All Together Now</h1>
  </div>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Button</th>
        <th>Classes</th>
        <th>Default</th>
        <th>Disabled</th>
        <th>Active</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Normal</td>
        <td><code>.btn</code></td>
        <td><a class="btn" href="#">Button</a><a class="btn" href="#"><i class="icon-ambulance"></i></a></td>
        <td><a class="btn disabled" href="#">Button</a><a class="btn disabled" href="#"><i class="icon-ambulance"></i></a></td>
        <td><a class="btn active" href="#">Button</a><a class="btn active" href="#"><i class="icon-ambulance"></i></a></td>
      </tr>
      <tr>
        <td>Invisible</td>
        <td><code>.btn .btn-invisible</code></td>
        <td><a class="btn btn-invisible" href="#">Button</a><a class="btn btn-invisible" href="#"><i class="icon-ambulance"></i></a></td>
        <td><a class="btn btn-invisible disabled" href="#">Button</a><a class="btn btn-invisible disabled" href="#"><i class="icon-ambulance"></i></a></td>
        <td><a class="btn btn-invisible active" href="#">Button</a><a class="btn btn-invisible active" href="#"><i class="icon-ambulance"></i></a></td>
      </tr>
      <tr>
        <td>Link</td>
        <td><code>.btn .btn-invisible .btn-link</code></td>
        <td><a class="btn btn-invisible btn-link" href="#">Button</a><a class="btn btn-invisible btn-link" href="#"><i class="icon-ambulance"></i></a></td>
        <td><a class="btn btn-invisible btn-link disabled" href="#">Button</a><a class="btn btn-invisible btn-link disabled" href="#"><i class="icon-ambulance"></i></a></td>
        <td><a class="btn btn-invisible btn-link active" href="#">Button</a><a class="btn btn-invisible btn-link active" href="#"><i class="icon-ambulance"></i></a></td>
      </tr>
    </tbody>
  </table>
</section>





<!-- Button Groups
================================================== -->
<section id="button-groups">
  <div class="page-header">
    <h1>Button groups <small>Join buttons for more toolbar-like functionality</small></h1>
  </div>
  <div class="row-fluid">
    <div class="span4">
      <h3>Button groups</h3>
      <p>Use button groups to join multiple buttons together as one composite component. Build them with a series of <code>&lt;a&gt;</code> or <code>&lt;button&gt;</code> elements.</p>
      <p>You can also combine sets of <code>&lt;div class="btn-group"&gt;</code> into a <code>&lt;div class="btn-toolbar"&gt;</code> for more complex projects.</p>
      <div class="btn-toolbar" style="margin-top: 18px;">
        <div class="btn-group">
          <a class="btn" href="#">Left</a>
          <a class="btn" href="#">Middle</a>
          <a class="btn" href="#">Right</a>
        </div>
      </div>
      <div class="btn-toolbar">
        <div class="btn-group">
          <a class="btn" href="#">1</a>
          <a class="btn" href="#">2</a>
          <a class="btn" href="#">3</a>
          <a class="btn" href="#">4</a>
        </div>
        <div class="btn-group">
          <a class="btn" href="#">5</a>
          <a class="btn" href="#">6</a>
          <a class="btn" href="#">7</a>
        </div>
        <div class="btn-group">
          <a class="btn" href="#">8</a>
        </div>
      </div>
    </div>
    <div class="span4">
      <h3>Example markup</h3>
      <p>Here\'s how the HTML looks for a standard button group built with anchor tag buttons:</p>
<pre class="prettyprint linenums">
&lt;div class="btn-group"&gt;
  &lt;a class="btn" href="#"&gt;1&lt;/a&gt;
  &lt;a class="btn" href="#"&gt;2&lt;/a&gt;
  &lt;a class="btn" href="#"&gt;3&lt;/a&gt;
&lt;/div&gt;
</pre>
      <p>And with a toolbar for multiple groups:</p>
<pre class="prettyprint linenums">
&lt;div class="btn-toolbar"&gt;
  &lt;div class="btn-group"&gt;
    ...
  &lt;/div&gt;
&lt;/div&gt;
</pre>
    </div>
    <div class="span4">
      <h3>Checkbox and radio flavors</h3>
      <p>Button groups can also function as radios, where only one button may be active, or checkboxes, where any number of buttons may be active. View <a href="widgets.html#buttons">the Javascript docs</a> for that.</p>
      <p><a class="btn js-btn" href="widgets.html#buttons">Get the javascript &raquo;</a></p>
      <hr>
      <h4 class="muted">Heads up</h4>
      <p class="muted">CSS for button groups is in a separate file, button-groups.less.</p>
    </div>
  </div>
</section>



<!-- Split button dropdowns
================================================== -->
<section id="button-dropdowns">
  <div class="page-header">
    <h1>Buttons dropdowns <small>Contextual dropdown menus built on button groups</small></h1>
  </div>

  <div class="row-fluid">
    <div class="span4">
      <h3>Button dropdowns</h3>
      <p>Use any button to trigger a dropdown menu by placing it within a <code>.btn-group</code> and providing the proper menu markup.</p>
      <div class="btn-toolbar" style="margin-top: 18px;">
        <div class="btn-group">
          <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">Action <i class="icon-caret-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">Action <i class="icon-caret-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#">Danger <i class="icon-caret-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
      </div>
      <div class="btn-toolbar">
        <div class="btn-group">
          <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#">Success <i class="icon-caret-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">Info <i class="icon-caret-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
      </div>
    </div>
    <div class="span8">
      <h3>Example markup</h3>
      <p>Similar to a button group, our markup uses regular button markup, but with a handful of additions to refine the style and support the dropdown jQuery plugin.</p>
<pre class="prettyprint linenums">
&lt;div class="btn-group"&gt;
  &lt;a class="btn dropdown-toggle" data-toggle="dropdown" href="#"&gt;
    Action
    &lt;i class="icon-caret-down"&gt;&lt;/i&gt;
  &lt;/a&gt;
  &lt;ul class="dropdown-menu"&gt;
    &lt;!-- dropdown menu links --&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
    </div>
  </div>

  <div class="row-fluid">
    <div class="span4">
      <h3>Split button dropdowns</h3>
      <p>Building on the button group styles and markup, we can easily create a split button. Split buttons feature a standard action on the left and a dropdown toggle on the right with contextual links.</p>
      <div class="btn-toolbar" style="margin-top: 18px;">
        <div class="btn-group">
          <a class="btn" href="#">Action</a>
          <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-caret-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <a class="btn btn-primary" href="#">Action</a>
          <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-caret-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <a class="btn btn-danger" href="#">Danger</a>
          <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-caret-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
      </div>
      <div class="btn-toolbar">
        <div class="btn-group">
          <a class="btn btn-success" href="#">Success</a>
          <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-caret-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <a class="btn btn-info" href="#">Info</a>
          <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-caret-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
      </div>
    </div>
    <div class="span8">
      <h3>Example markup</h3>
      <p>We expand on the normal button dropdowns to provide a second button action that operates as a separate dropdown trigger.</p>
<pre class="prettyprint linenums">
&lt;div class="btn-group"&gt;
  &lt;a class="btn" href="#"&gt;Action&lt;/a&gt;
  &lt;a class="btn dropdown-toggle" data-toggle="dropdown" href="#"&gt;
    &lt;i class="icon-caret-down"&gt;&lt;/i&gt;
  &lt;/a&gt;
  &lt;ul class="dropdown-menu"&gt;
    &lt;!-- dropdown menu links --&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
    </div>
  </div>
</section>



<!-- Buttons (Widget)
================================================== -->
<section id="buttons">
  <div class="page-header">
    <h1>Buttons <small>bootstrap-button.js</small></h1>
  </div>
  <div class="row-fluid">
    <div class="span3 columns">
      <h3>About</h3>
      <p>Do more with buttons. Control button states or create groups of buttons for more components like toolbars.</p>
      <a href="js/bootstrap-button.js" target="_blank" class="btn">Download file</a>
    </div>
    <div class="span9 columns">
      <h2>Example uses</h2>
      <p>Use the buttons plugin for states and toggles.</p>
      <table class="table table-bordered table-striped">
        <tbody>
         <tr>
           <td>Stateful</td>
           <td>
              <button id="fat-btn" data-loading-text="loading..." class="btn btn-primary">
                Loading State
              </button>
            </td>
         </tr>
         <tr>
           <td>Single toggle</td>
           <td>
              <button class="btn btn-primary" data-toggle="button">Single Toggle</button>
            </td>
         </tr>
         <tr>
           <td>Checkbox</td>
           <td>
              <div class="btn-group" data-toggle="buttons-checkbox">
                <button class="btn btn-primary">Left</button>
                <button class="btn btn-primary">Middle</button>
                <button class="btn btn-primary">Right</button>
              </div>
           </td>
         </tr>
         <tr>
           <td>Radio</td>
           <td>
              <div class="btn-group" data-toggle="buttons-radio">
                <button class="btn btn-primary">Left</button>
                <button class="btn btn-primary">Middle</button>
                <button class="btn btn-primary">Right</button>
              </div>
           </td>
         </tr>
        </tbody>
      </table>
      <hr>
      <h2>Using bootstrap-button.js</h2>
      <p>Enable buttons via javascript:</p>
      <pre class="prettyprint linenums">$(\'.tabs\').button()</pre>
        <h3>Markup</h3>
      <p>Data attributes are integral to the button plugin. Check out the example code below for the various markup types.</p>
<pre class="prettyprint linenums">
&lt;!-- Add data-toggle="button" to activate toggling on a single button --&gt;
&lt;button class="btn" data-toggle="button"&gt;Single Toggle&lt;/button&gt;

&lt;!-- Add data-toggle="buttons-checkbox" for checkbox style toggling on btn-group --&gt;
&lt;div class="btn-group" data-toggle="buttons-checkbox"&gt;
&lt;button class="btn"&gt;Left&lt;/button&gt;
&lt;button class="btn"&gt;Middle&lt;/button&gt;
&lt;button class="btn"&gt;Right&lt;/button&gt;
&lt;/div&gt;

&lt;!-- Add data-toggle="buttons-radio" for radio style toggling on btn-group --&gt;
&lt;div class="btn-group" data-toggle="buttons-radio"&gt;
&lt;button class="btn"&gt;Left&lt;/button&gt;
&lt;button class="btn"&gt;Middle&lt;/button&gt;
&lt;button class="btn"&gt;Right&lt;/button&gt;
&lt;/div&gt;
</pre>
      <h3>Methods</h3>
      <h4>$().button(\'toggle\')</h4>
      <p>Toggles push state. Gives btn the look that it\'s been activated.</p>
      <div class="alert alert-info">
        <strong>Heads up!</strong>
        You can enable auto toggling of a button by using the <code>data-toggle</code> attribute.
      </div>
      <pre class="prettyprint linenums">&lt;button class="btn" data-toggle="button" &gt;…&lt;/button&gt;</pre>
      <h4>$().button(\'loading\')</h4>
      <p>Sets button state to loading - disables button and swaps text to loading text. Loading text should be defined on the button element using the data attribute <code>data-loading-text</code>.
      </p>
      <pre class="prettyprint linenums">&lt;button class="btn" data-loading-text="loading stuff..." &gt;...&lt;/button&gt;</pre>
      <div class="alert alert-info">
        <strong>Heads up!</strong>
        <a href="https://github.com/twitter/bootstrap/issues/793">Firefox persists the disabled state across page loads</a>. A workaround for this is to use <code>autocomplete="off"</code>.
      </div>
      <h4>$().button(\'reset\')</h4>
      <p>Resets button state - swaps text to original text.</p>
      <h4>$().button(string)</h4>
      <p>Resets button state - swaps text to any data defined text state.</p>
<pre class="prettyprint linenums">&lt;button class="btn" data-complete-text="finished!" &gt;...&lt;/button&gt;
&lt;script&gt;
$(\'.btn\').button(\'complete\')
&lt;/script&gt;</pre>
    </div>
  </div>
</section>
',
      'layouts_navbar' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
<!-- Navbar
================================================== -->
<section id="navbar">
  <div class="page-header">
    <h1>Navbar</h1>
  </div>
  <h2>Static navbar example</h2>
  <p>An example of a static (not fixed to the top) navbar with project name, navigation, and search form.</p>
  <div class="navbar">
    <div class="navbar-inner">
      <div class="container" style="width: auto;">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="#">Project name</a>
        <div class="nav-collapse">
          <ul class="nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <i class="icon-caret-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-search pull-left" action="">
            <input type="text" class="search-query span2" placeholder="Search">
          </form>
          <ul class="nav pull-right">
            <li><a href="#">Link</a></li>
            <li class="divider-vertical"></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <i class="icon-caret-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->

  <div class="row-fluid">
    <div class="span8">
      <h3>Navbar scaffolding</h3>
      <p>The navbar requires only a few divs to structure it well for static or fixed display.</p>
<pre class="prettyprint linenums">
&lt;div class="navbar"&gt;
  &lt;div class="navbar-inner"&gt;
    &lt;div class="container"&gt;
      ...
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
      <p>To make the navbar fixed to the top of the viewport, add <code>.navbar-fixed-top</code> to the outermost div, <code>.navbar</code>. In your CSS, you will also need to account for the overlap it causes by adding <code>padding-top: 40px;</code> to your <code>&lt;body&gt;</code>.</p>
<pre class="prettyprint linenums">
&lt;div class="navbar navbar-fixed-top"&gt;
  ...
&lt;/div&gt;
</pre>
      <h3>Brand name</h3>
      <p>A simple link to show your brand or project name only requires an anchor tag.</p>
<pre class="prettyprint linenums">
&lt;a class="brand" href="#"&gt;
  Project name
&lt;/a&gt;
</pre>
      <h3>Search form</h3>
      <p>Search forms receive custom styles in the navbar with the <code>.navbar-search</code> class. Include <code>.pull-left</code> or <code>.pull-right</code> on the <code>form</code> to align it.</p>
<pre class="prettyprint linenums">
&lt;form class="navbar-search pull-left"&gt;
  &lt;input type="text" class="search-query" placeholder="Search"&gt;
&lt;/form&gt;
</pre>
      <h3>Optional responsive variation</h3>
      <p>Depending on the amount of content in your topbar, you might want to implement the responsive options. To do so, wrap your nav content in a containing div, <code>.nav-collapse.collapse</code>, and add the navbar toggle button, <code>.btn-navbar</code>.</p>
<pre class="prettyprint linenums">
&lt;div class="navbar"&gt;
  &lt;div class="navbar-inner"&gt;
    &lt;div class="container"&gt;

      &lt;!-- .btn-navbar is used as the toggle for collapsed navbar content --&gt;
      &lt;a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"&gt;
        &lt;span class="icon-bar"&gt;&lt;/span&gt;
        &lt;span class="icon-bar"&gt;&lt;/span&gt;
        &lt;span class="icon-bar"&gt;&lt;/span&gt;
      &lt;/a&gt;

      &lt;!-- Be sure to leave the brand out there if you want it shown --&gt;
      &lt;a class="brand" href="#"&gt;Project name&lt;/a&gt;

      &lt;!-- Everything you want hidden at 940px or less, place within here --&gt;
      &lt;div class="nav-collapse"&gt;
        &lt;!-- .nav, .navbar-search, .navbar-form, etc --&gt;
      &lt;/div&gt;

    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
      <div class="alert alert-info">
        <strong>Heads up!</strong> The responsive navbar requires the <a href="widgets.html#collapse">collapse plugin</a>.
      </div>

    </div><!-- /.span -->
    <div class="span4">
      <h3>Nav links</h3>
      <p>Nav items are simple to add via unordered lists.</p>
<pre class="prettyprint linenums">
&lt;ul class="nav"&gt;
  &lt;li class="active"&gt;
    &lt;a href="#">Home&lt;/a&gt;
  &lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Link&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>
      <h3>Adding dropdowns</h3>
      <p>Adding dropdowns to the nav is super simple, but does require the use of <a href="widgets.html#dropdown">our javascript plugin</a>.</p>
<pre class="prettyprint linenums">
&lt;ul class="nav"&gt;
  &lt;li class="dropdown"&gt;
    &lt;a href="#"
          class="dropdown-toggle"
          data-toggle="dropdown">
          Account
          &lt;i class="icon-caret-down"&gt;&lt;/i&gt;
    &lt;/a&gt;
    &lt;ul class="dropdown-menu"&gt;
      ...
    &lt;/ul&gt;
  &lt;/li&gt;
&lt;/ul&gt;
</pre>
      <p><a class="btn" href="widgets.html#dropdown">Get the javascript &rarr;</a></p>
    </div><!-- /.span -->
  </div><!-- /.row -->

</section>
',
      'forms_editable' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
<script src="include/javascript/jquery/jquery.jeditable.js"></script>

<!-- Editable
================================================== -->
<section id="editable">
  <div class="page-header">
    <h1>Editable <small>Inline edit inputs</small></h1>
  </div>
  <div class="row">

    <div class="span6">
      <h2>Inline editable field</h2>

      <div class="row-fluid control-group">
        <div class="span2">
          Label
        </div>
        <div class="span10 urleditable-wrap inline-editable-wrap">
          <span sfuuid="1">
            <a class="btn-mini btn inline-editable urleditable text-editable-trigger pull-left">
              <i style="position:relative;left:auto;padding:0 !important;top:2px;" class="icon-pencil icon-sm"></i>
            </a>
            <span class="urleditable-field editable-field">Some content</span>
          </span>
          <p class="help-block">
          </p>
        </div>
      </div>

      <div class="row-fluid control-group">
        <div class="span2">
          Label
        </div>
        <div class="span10 urleditable-wrap inline-editable-wrap ">
          <span sfuuid="1">
            <a class="btn-mini btn inline-editable urleditable text-editable-trigger pull-left">
              <i style="position:relative;left:auto;padding:0 !important;top:2px;" class="icon-pencil icon-sm"></i>
            </a>
            <span class="urleditable-field editable-field">Lots of content lots of content lots of contentlots of content lots of content</span>
          </span>
          <p class="help-block">
          </p>
        </div>
      </div>

      <div class="row-fluid control-group error">
        <div class="span2">
          Label
        </div>
        <div class="span10 urleditable-wrap inline-editable-wrap">
          <span sfuuid="1">
            <a class="btn-mini btn inline-editable urleditable text-editable-trigger pull-left">
              <i style="position:relative;left:auto;padding:0 !important;top:2px;" class="icon-pencil icon-sm"></i>
            </a>
            <span class="editable-field">Lots of content lots of content lots of contentlots of content lots of content</span>
          </span>
          <p class="help-block">
            Error. This field is required.
          </p>
        </div>
      </div>
    </div><!--/span-->

    <div class="span6">
      <h2>URL field</h2>

      <div class="row-fluid control-group">
        <div class="span2">
          Label
        </div>
        <div class="span10 urleditable-wrap inline-editable-wrap ">
          <span sfuuid="1">
            <a class="btn-mini btn inline-editable urleditable editable-trigger url-editable-trigger pull-left">
              <i style="position:relative;left:auto;padding:0 !important;top:2px;" class="icon-pencil icon-sm"></i>
            </a>
            <span class="urleditable-field editable-field"><a href=""><span>http://google.com</span></a></span>
          </span>
          <p class="help-block">
          </p>
        </div>
      </div>

      <div class="row-fluid control-group">
        <div class="span2">
          Label
        </div>
        <div class="span10 urleditable-wrap inline-editable-wrap ">
          <span sfuuid="1">
            <a class="btn-mini btn inline-editable urleditable editable-trigger url-editable-trigger pull-left">
              <i style="position:relative;left:auto;padding:0 !important;top:2px;" class="icon-pencil icon-sm"></i>
            </a>
            <span class="urleditable-field editable-field"><a href=""><span>https://sugarcrm.atlassian.net/secure/IssueNavigator.jspa&64;dasdsd</span></a></span>
          </span>
          <p class="help-block">
          </p>
        </div>
      </div>

      <div class="row-fluid control-group error">
        <div class="span2">
          Label
        </div>
        <div class="span10 urleditable-wrap inline-editable-wrap ">
          <span sfuuid="1">
            <a class="btn-mini btn inline-editable urleditable editable-trigger url-editable-trigger pull-left">
              <i style="position:relative;left:auto;padding:0 !important;top:2px;" class="icon-pencil icon-sm"></i>
            </a>
            <span class="urleditable-field editable-field"><a href=""><span>https://sugarcrm.atlassian.net/secure/IssueNavigator.jspa&64;dasdsd</span></a></span>
          </span>
          <p class="help-block">
            Error. This field is required.
          </p>
        </div>
      </div>

      <!-- <p>Take the same <code>&lt;pre&gt;</code> element and add two optional classes for enhanced rendering.</p>
      <pre class="prettyprint linenums" style="margin-bottom: 9px;">
      &lt;p&gt;Sample text here...&lt;/p&gt;
      </pre> -->
    </div><!--/span-->

  </div><!--/row-->
</section>
',
      'forms_switch' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
<script src="include/javascript/twitterbootstrap/bootstrap-switch.js"></script>

<!-- Switch
================================================== -->
<section id="slider">
    <div class="page-header">
        <h1>Switch <small>bootstrap-switch.js</small></h1>
    </div>
    <div class="row-fluid">
        <div class="span3 columns">
            <h3>About Bootstrap switch</h3>
            <p>Bootstrap switch is an unofficial bootstrap plugin that transforms checkboxes into a toggle switch.</p>
            <p>The bootstrap-switch.js plugin is included in the default build of SugarCRM.</p>
            <p><a href="http://www.larentis.eu/switch/">Documentation</a> from bootstrap-switch.js developer.</p>
        </div>
        <div class="span9 columns">
            <h2>Example</h2>
            <div class="well">
                <div class="switch switch-mini round-switch">
                    <input type="checkbox" id="switch_example1" checked>
                </div>
            </div>
            <hr>
            <h2>Using Bootstrap switch</h2>
            <p>Initiating a switch:</p>
<pre class="prettyprint linenums">
&lt;div class="switch switch-mini round-switch"&gt;
  &lt;input type="checkbox" checked /&gt;
&lt;/div&gt;
</pre>
            <h3>Options</h3>
            <table class="table table-bordered table-striped">
                <tbody>
                <tr>
                    <th>Name</th>
                    <th>Example</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>animation</td>
                    <td>&lt;div class="switch" data-animated="false"&gt;</td>
                    <td>Disable animation</td>
                </tr>
                <tr>
                    <td>text</td>
                    <td>&lt;div class="switch" data-on-label="SI" data-off-label="NO"&gt;</td>
                    <td>replaces default text</td>
                </tr>
                <tr>
                    <td>HTML text</td>
                    <td>&lt;div class="switch" data-on-label="&lt;i class=\'icon-ok icon-white\'>&lt;/i&gt;" data-off-label="&lt;i class=\'icon-remove\'&gt;&lt;/i&gt;"&gt;</td>
                    <td>replaces default text with HTML</td>
                </tr>
                </tbody>
            </table>
            <h3>Event Handler</h3>
            <div class="well">
                <div id="mySwitch" class="switch switch-mini round-switch">
                    <input type="checkbox" id="switch_example2" checked>
                </div>
            </div>
<pre class="prettyprint linenums">
$(\'#mySwitch\').on(\'switch-change\', function (e, data) {
    var $el = $(data.el)
    , value = data.value;
});
</pre>
        </div>
    </div>
</section>
',
      'charts_line' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
<section id="line">
  <div class="page-header">
    <h2>Line <small>used for comparing data series</small></h2>
  </div>
  <div class="row-fluid">
    <div class="span6">
      <h3>Standard Line Chart</h3>
      <p>Line chart with baseline y-axis. [<a href="styleguide/content/charts/lineChart.html" target="_blank">Full Screen</a> | <a href="styleguide/content/charts/lineChart_colors.html" target="_blank">Color Options</a>].</p>
      <div>
<div id="line1" class="nv-chart">
<svg></svg>
</div>
      </div>
    </div>
    <div class="span6">
      <h3>Stacked Area Chart</h3>
      <p>Line chart with cumulative y-axis. [<a href="styleguide/content/charts/stackedAreaChart.html" target="_blank">Full Screen</a> | <a href="styleguide/content/charts/stackedAreaChart_colors.html" target="_blank">Color Options</a>]</p>
      <div>
<div id="area" class="nv-chart">
<svg></svg>
</div>
      </div>
    </div>
  </div>
</section>

<script src="styleguide/content/charts/data/line_data.js"></script>


<script>
  // Line chart
  nv.addGraph(function() {
    var chart = nv.models.lineChart()
          .x(function(d) { return d[0] })
          .y(function(d) { return d[1] })
          .showTitle(false)
          .tooltips(true)
          .showControls(false)
          .tooltipContent( function(key, x, y, e, graph) {
              return \'<p>Category: <b>\' + key + \'</b></p>\' +
                     \'<p>Amount: <b>$\' +  parseInt(y) + \'M</b></p>\' +
                     \'<p>Date: <b>\' +  x + \'</b></p>\'
            })
          //.forceY([0,400]).forceX([0,6]);
        ;

    chart.xAxis
        .tickFormat(function(d) { return d3.time.format(\'%x\')(new Date(d)) });

    chart.yAxis
        .axisLabel(\'Voltage (v)\')
        .tickFormat(d3.format(\',.2f\'));

    d3.select(\'#line1 svg\')
        .datum(line_data_default)
      .transition().duration(500)
        .call(chart);

    return chart;
  });

  // Stacked area chart
  nv.addGraph(function() {

    var chart = nv.models.stackedAreaChart()
          .x(function(d) { return d[0] })
          .y(function(d) { return d[1] })
          .tooltipContent( function(key, x, y, e, graph) {
              return \'<p>Category: <b>\' + key + \'</b></p>\' +
                     \'<p>Amount: <b>$\' +  parseInt(y) + \'M</b></p>\' +
                     \'<p>Date: <b>\' +  x + \'</b></p>\'
            })
          .showTitle(false)
          .tooltips(true)
          .showControls(false)
          .colorData( \'graduated\', {c1: \'#e8e2ca\', c2: \'#3e6c0a\', l: line_data_default.data.length} )
          //.colorData( \'class\' )
          //.colorData( \'default\' )
          //.clipEdge(true)
        ;

    chart.xAxis
        .tickFormat(function(d) { return d3.time.format(\'%x\')(new Date(d)) });

    chart.yAxis
        .axisLabel(\'Expenditures ($)\')
        .tickFormat(d3.format(\',.2f\'));

    d3.select(\'#area svg\')
        .datum(line_data_default)
      .transition().duration(500)
        .call(chart);

    return chart;
  });
</script>
',
      'forms_fields' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
<!-- Form inputs
================================================== -->
<style>
table.accordion td.accordion-heading .accordion-toggle,
table.accordion td.accordion-body {
    padding: 0;
}
table.accordion .accordion-inner {
    border: none;
}
table.accordion .accordion-body {
    border-top: none;
}
</style>

<section id="form-inputs">
    <div class="page-header">
        <h1>Sugar7 Fields <small>Basic fields that support detail, record, and edit modes with error addons.</small></h1>
    </div>
    <div class="record">
        <table class="accordion table table-bordered table-striped table-condensed" id="accordion_fields">
            <thead>
                <tr>
                    <th>Field Name</th><th>Type</th><th>Sugar Field</th><th>Examples</th><th>Documentation</th>
                </tr>
            </thead>
        {{#each tempfields}}
            <tbody class="accordion-group">
                <tr>
                    <td>{{this.name}}</td>
                    <td>plugin</td>
                    <td>{{this.type}}</td>
                    <td class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion_fields" data-target="#collapse_field_{{this.type}}">Example</a>
                    </td>
                    <td><a href="#Styleguide/docs/forms.datetime">Documentation</a></td>
                </tr>
                <tr>
                    <td class="accordion-body collapse" colspan="5">
                        <div class="accordion-inner" id="collapse_field_{{this.type}}" style="height:0px;">
                            <div class="row-fluid">
                                <h3>Detail</h3>
                                {{field ../this model=../this.model template="detail"}}
                            </div>
                            <div class="row-fluid">
                                <h3>Edit</h3>
                                {{field ../this model=../this.model template="edit"}}
                            </div>
                            <div class="row-fluid">
                                <h3>Disabled</h3>
                                {{field ../this model=../this.model template="disabled"}}
                            </div>
                            <div class="row-fluid">
                                <h3>List</h3>
                                {{field ../this model=../this.model template="list"}}
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        {{/each}}
        </table>
    </div>

    <div class="description">
    {{{description}}}
    </div>
</section>
',
      'charts_horizontal' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
<section id="horizontal-bar">
  <div class="page-header">
    <h2>Horizontal Bar <small>used for comparing many values in a single series</small></h2>
  </div>
  <div class="row-fluid">
    <div class="span6">
      <h3>All Opportunities By Lead Source</h3>
      <p>A horizontal bar chart with stacked data. [<a href="styleguide/content/charts/multiBarHorizontalChart_opportunities.html" target="_blank">Full Screen</a> | <a href="styleguide/content/charts/multiBarHorizontalChart_colors.html" target="_blank">Color Options</a>]</p>
      <div>
<div id="horiz1" class="nv-chart">
<svg></svg>
</div>
      </div>
    </div>
    <div class="span6">
      <h3>Short/Long Horizontal Bar</h3>
      <p>A horizontal bar chart relative to a baseline. [<a href="styleguide/content/charts/multiBarHorizontalChart.html" target="_blank">Full Screen</a> | <a href="styleguide/content/charts/multiBarHorizontalChart_colors.html" target="_blank">Color Options</a>]</p>
      <div>
<div id="horiz2" class="nv-chart">
<svg></svg>
</div>
      </div>
    </div>
  </div>
</section>

<script src="styleguide/content/charts/data/horizbar_data.js"></script>

<script>
  // Multibar Horizontal Chart
  nv.addGraph({
    generate: function() {
      nv.addGraph(function() {
        var chart = nv.models.multiBarHorizontalChart()
              .x(function(d) { return d.label })
              .y(function(d) { return d.value })
              .margin({top: 10, right: 10, bottom: 20, left: 90})
              .showValues(true)
              .showTitle(false)
              .tooltips(true)
              .stacked(true)
              .showControls(false)
              .tooltipContent( function(key, x, y, e, graph) {
                return \'<p>Outcome: <b>\' + key + \'</b></p>\' +
                       \'<p>Lead Source: <b>\' +  x + \'</b></p>\' +
                       \'<p>Amount: <b>$\' +  parseInt(y) + \'K</b></p>\'
                })
            ;

        chart.yAxis
            .tickFormat(d3.format(\',.2f\'));

        d3.select(\'#horiz1 svg\')
            .datum(opportunities_data)
          .transition().duration(500)
            .call(chart);

        return chart;
      });
    },
    callback: function(graph) {
      $(\'#log\').text(\'Chart is loaded\');
    }
  });

  // Multibar Horizontal Chart with Baseline
  nv.addGraph({
    generate: function() {
      nv.addGraph(function() {
        var chart = nv.models.multiBarHorizontalChart()
              .x(function(d) { return d.label })
              .y(function(d) { return d.value })
              .margin({top: 10, right: 10, bottom: 20, left: 80})
              .showValues(true)
              .showTitle(false)
              .tooltips(true)
              .showControls(false)
              .stacked(false)
              .tooltipContent( function(key, x, y, e, graph) {
                return \'<p>Outcome: <b>\' + key + \'</b></p>\' +
                       \'<p>Lead Source: <b>\' +  x + \'</b></p>\' +
                       \'<p>Amount: <b>$\' +  parseInt(y) + \'K</b></p>\'
              })
            ;

        chart.yAxis
            .tickFormat(d3.format(\',.2f\'));

        d3.select(\'#horiz2 svg\')
            .datum(horizbar_data_default)
          .transition().duration(500)
            .call(chart);

        return chart;
      });
    },
    callback: function(graph) {
      $(\'#log\').text(\'Chart is loaded\');
    }
  });
</script>
',
      'layouts_drawer' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
<!-- Drawers
================================================== -->
<section id="drawer">
  <div class="page-header">
    <h1>Drawers</h1>
  </div>
  <div class="row-fluid">
    <div class="span3 columns">
      <h3>About drawers</h3>
      <p>Drawer is a form of a modal that pushes main content down and expands from the top taking 100% of the screen width.
        It is used for various Create work flows. Content that was on screen prior to drawer trigger is visible in the drawer
        on the bottom part of the screen.
      </p>
    </div>
    <div class="span9 columns">
      <h2>Example</h2>
      <p><button class="btn btn-primary" id="sg_open_drawer">Open a Drawer</button></p>
    </div>
  </div>
</section>
',
      'components_alerts' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}

<!-- Alerts & Messages
================================================== -->
<section id="alerts">
  <div class="page-header">
    <h1>Alerts <small>Styles for success, warning, and error messages</small></h1>
  </div>

  <div class="row-fluid">
    <div class="span4">
      <h3>Rewritten base class</h3>
      <p>We\'ve simplified the base class: <code>.alert</code> instead of <code>.alert-message</code>. We\'ve also reduced the minimum required markup&mdash;no <code>&lt;p&gt;</code> is required by default, just the outter <code>&lt;div&gt;</code>.</p>
      <h3>Single alert message</h3>
      <p>For a more durable component with less code, we\'ve removed the differentiating look for block alerts, messages that come with more padding and typically more text. The class also has changed to <code>.alert-block</code>.</p>
      <hr>
      <h3>Goes great with javascript</h3>
      <p>Comes with a great jQuery plugin that supports alert messages, making dismissing them quick and easy.</p>
      <p>This plugin is included in the base SugarCRM build of bootstrap. See below.</p>
    </div>
    <div class="span8">
      <h2>Lightweight defaults</h2>
      <p>Wrap your message and an optional close icon in a div with simple class.</p>
      <div class="alert">
        <a class="close">&times;</a>
        <strong>Warning!</strong> Best check yo self, you\'re not looking too good.
      </div>
      <pre class="prettyprint linenums">
&lt;div class="alert"&gt;
  &lt;a class="close"&gt;&times;&lt;/a&gt;
  &lt;strong&gt;Warning!&lt;/strong&gt; Best check yo self, you\'re not looking too good.
&lt;/div&gt;
      </pre>
      <p>Easily extend the standard alert message with two optional classes: <code>.alert-block</code> for more padding and text controls and <code>.alert-heading</code> for a matching heading.</p>
      <div class="alert alert-block">
        <a class="close">&times;</a>
        <h4 class="alert-heading">Warning!</h4>
        <p>Best check yo self, you\'re not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
      </div>
      <pre class="prettyprint linenums">
&lt;div class="alert alert-block"&gt;
  &lt;a class="close"&gt;&times;&lt;/a&gt;
  &lt;h4 class="alert-heading"&gt;Warning!&lt;/h4&gt;
  Best check yo self, you\'re not...
&lt;/div&gt;
      </pre>
    </div>
  </div>

  <div class="page-header">
    <h1>Contextual alternatives <small>Add optional classes to change an alert\'s connotation</small></h1>
  </div>

  <div class="row-fluid">
    <div class="span4">
      <h3>Error or danger</h3>
      <div class="alert alert-error">
        <a class="close">&times;</a>
        <strong>Oh snap!</strong> Change a few things up and try submitting again.
      </div>
      <pre class="prettyprint linenums">
&lt;div class="alert alert-error"&gt;
  ...
&lt;/div&gt;
      </pre>
    </div>
    <div class="span4">
      <h3>Success</h3>
      <div class="alert alert-success">
        <a class="close">&times;</a>
        <strong>Well done!</strong> You successfully read this important alert message.
      </div>
      <pre class="prettyprint linenums">
&lt;div class="alert alert-success"&gt;
  ...
&lt;/div&gt;
      </pre>
    </div>
    <div class="span4">
      <h3>Information</h3>
      <div class="alert alert-info">
        <a class="close">&times;</a>
        <strong>Heads up!</strong> This alert needs your attention, but it\'s not super important.
      </div>
      <pre class="prettyprint linenums">
&lt;div class="alert alert-info"&gt;
  ...
&lt;/div&gt;
      </pre>
    </div>
  </div>

 <div class="row-fluid">
    <div class="span6">
      <h3>Loading message</h3>
      <div class="alert alert-process">
          <strong>Loading</strong>
          <div class="loading">
              <span class="l1"></span><span class="l2"></span><span class="l3"></span>
          </div>
          <a class="close" data-dismiss="alert">x</a>
      </div>
      <pre class="prettyprint linenums">
&lt;div class="alert alert-process"&gt;
  &lt;strong&gt;Strong&lt;/strong&gt;
  &lt;div class="loading"&gt;
    &lt;span class="l1"&gt;&lt;/span&gt;&lt;span class="l2"&gt;&lt;/span&gt;&lt;span class="l3"&gt;&lt;/span&gt;
  &lt;/div&gt;
  &lt;a class="close" data-dismiss="alert"&gt;x&lt;/a&gt;
&lt;/div&gt;
      </pre>
    </div>
    <div class="span6">
      <h3>Inline loading message, no border</h3>
      <div class="alert-process">
          <strong>Please wait</strong>
          <div class="loading">
              <span class="l1"></span><span class="l2"></span><span class="l3"></span>
          </div>
      </div>
      <br>
      <br>
      <pre class="prettyprint linenums">
&lt;div class="alert-process"&gt;
  &lt;strong&gt;Please wait&lt;/strong&gt;
  &lt;div class="loading"&gt;
    &lt;span class="l1"&gt;&lt;/span&gt;&lt;span class="l2"&gt;&lt;/span&gt;&lt;span class="l3"&gt;&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;
      </pre>
    </div>
  </div>


<!-- Alert (Widget)
================================================== -->
  <div class="page-header">
    <h1>Alert messages <small>bootstrap-alert.js</small></h1>
  </div>
  <div class="row-fluid">
    <div class="span4 columns">
      <h3>About alerts</h3>
      <p>The alert plugin is a tiny class for adding close functionality to alerts.</p>
      <p>The bootsrap-alert.js plugin is included in the default build of SugarCRM.</p>
    </div>
    <div class="span8 columns">
      <h2>Example alerts</h2>
      <p>The alerts plugin works on regular alert messages, and block messages.</p>
      <div class="alert fade in">
        <a class="close" data-dismiss="alert" href="#">&times;</a>
        <strong>Holy guacamole!</strong> Best check yo self, you\'re not looking too good.
      </div>
      <div class="alert alert-block alert-error fade in">
        <a class="close" data-dismiss="alert" href="#">&times;</a>
        <h4 class="alert-heading">Oh snap! You got an error!</h4>
        <p>Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
        <p>
          <a class="btn btn-danger small" href="#">Take this action</a> <a class="btn small" href="#">Or do this</a>
        </p>
      </div>
      <hr>
      <h2>Using bootstrap-alerts.js</h2>
      <p>Enable dismissal of an alert via javascript:</p>
      <pre class="prettyprint linenums">$(".alert-message").alert()</pre>
      <h3>Markup</h3>
      <p>Just add <code>data-dismiss="alert"</code> to your close button to automatically give an alert close functionality.</p>
      <pre class="prettyprint linenums">&lt;a class="close" data-dismiss="alert" href="#"&gt;&amp;times;&lt;/a&gt;</pre>
      <h3>Methods</h3>
      <h4>$().alert()</h4>
      <p>Wraps all alerts with close functionality. To have your alerts animate out when closed, make sure they have the <code>.fade</code> and <code>.in</code> class already applied to them.</p>
      <h4>.alert(\'close\')</h4>
      <p>Closes an alert.</p>
      <pre class="prettyprint linenums">$(".alert-message").alert(\'close\')</pre>
      <h3>Events</h3>
      <p>Bootstrap\'s alert class exposes a few events for hooking into alert functionality.</p>
      <table class="table table-bordered table-striped">
        <thead>
         <tr>
           <th style="width: 150px;">Event</th>
           <th>Description</th>
         </tr>
        </thead>
        <tbody>
         <tr>
           <td>close</td>
           <td>This event fires immediately when the <code>close</code> instance method is called.</td>
         </tr>
         <tr>
           <td>closed</td>
           <td>This event is fired when the alert has been closed (will wait for css transitions to complete).</td>
         </tr>
        </tbody>
      </table>
<pre class="prettyprint linenums">
$(\'#my-alert\').bind(\'closed\', function () {
// do something…
})</pre>
    </div>
  </div>
</section>


<!-- Alert Examples
================================================== -->
<div id="alert" class="alert-top">
  <div class="alert alert-process timeten">
    <strong>Loading</strong>
    <div class="loading">
        <span class="l1"></span><span class="l2"></span><span class="l3"></span>
    </div>
  </div>
  <div class="alert alert-danger alert-block">
    <a class="close" data-dismiss="alert" href="#Styleguide/docs/index.components">×</a>
    <strong>Error!</strong> The core is in meltdown!! This will message persist. <a href="">Link example</a>.
  </div>
  <div class="alert alert-warning alert-block timeten">
    <a class="close" data-dismiss="alert">×</a>
    <strong>Warning!</strong> The core could go nuclear! This will go away after 10 second because of the class timeten <a href="">Link example</a>.
  </div>
  <div class="alert alert-success alert-block timeten">
    <strong>Success!</strong> You did it. 10 sec delay. ESC will also remove messages. <a href="">Link example</a>.
    <a class="close" data-dismiss="alert">×</a>
  </div>
  <div class="alert alert-info alert-block timeten">
    <a class="close" data-dismiss="alert">×</a>
    <strong>Notice!</strong> You did something. This will go away after 10 seconds. <a href="">Link example</a>.
  </div>

  <div class="alert alert-confirm alert-warning alert-block span4 modal hide">
    <a class="close">×</a>
    <p><strong>Notice!</strong> Are you sure you want to leave this page?<br />Your unsaved changes will be lost.</p>
    <a class="btn leave">Leave</a>
    <a class="btn btn-primary pull-right return">Return</a>
  </div>
</div>
',
      'components_dropdowns' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}

<!-- Dropdown
================================================== -->
<section id="dropdowns">
  <div class="page-header">
    <h1>Dropdowns <small>bootstrap-dropdown.js</small></h1>
  </div>
  <div class="row-fluid">
    <div class="span3 columns">
      <h3>About dropdowns</h3>
      <p>Add dropdown menus to nearly anything with this simple plugin. Features full dropdown menu support on in the navbar, tabs, and pills.</p>
      <p>The bootsrap-dropdown.js plugin is included in the default build of SugarCRM.</p>
    </div>
    <div class="span9 columns">
      <h2>Standart menu (OEM Twitter Bootstrap)</h2>
      <p>Click on the dropdown nav links in the navbar and pills below to test dropdowns.</p>
      <div id="navbar-example" class="navbar navbar-static">
        <div class="navbar-inner">
          <div class="container" style="width: auto;">
            <a class="brand" href="#">Project Name</a>
            <ul class="nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <i class="icon-caret-down"></i></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown 2 <i class="icon-caret-down"></i></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav pull-right">
              <li id="fat-menu" class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown 3 <i class="icon-caret-down"></i></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div> <!-- /navbar-example -->

      <ul class="nav nav-pills">
        <li class="active"><a href="#">Regular link</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown <i class="icon-caret-down"></i></a>
          <ul id="menu1" class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown 2 <i class="icon-caret-down"></i></a>
          <ul id="menu2" class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown 3 <i class="icon-caret-down"></i></a>
          <ul id="menu3" class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul> <!-- /tabs -->

      <hr>

      <h2>Using bootstrap-dropdown.js</h2>
      <p>Call the dropdowns via javascript:</p>
      <pre class="prettyprint linenums">$(\'.dropdown-toggle\').dropdown()</pre>
      <h3>Markup</h3>
      <p>To quickly add dropdown functionality to any element just add <code>data-toggle="dropdown"</code> and any valid dropdown will automatically be activated.</p>

<pre class="prettyprint linenums">
&lt;ul class="nav pills"&gt;
  &lt;li class="active"&gt;&lt;a href="#"&gt;Regular link&lt;/a&gt;&lt;/li&gt;
  &lt;li class="dropdown" id="menu1"&gt;
    &lt;a class="dropdown-toggle" data-toggle="dropdown" href="#menu1"&gt;
      Dropdown
      &lt;i class="icon-caret-down"&gt;&lt;/i&gt;
    &lt;/a&gt;
    &lt;ul class="dropdown-menu"&gt;
      &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
      &lt;li class="divider"&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
  ...
&lt;/ul&gt;
</pre>
      <h3>Methods</h3>
      <h4>$().dropdown()</h4>
      <p>A programatic api for activating menus for a given navbar or tabbed navigation.</p>
    </div>
  </div>

<div class="page-header">
  </div>
  <div class="row-fluid">
    <div class="span3 columns">

    </div>
    <div class="span9 columns">
      <h2>Megamenus (custom by sugarcrm team)</h2>
      <p>Click on the dropdown nav links in the navbar and pills below to test dropdowns.</p>
      <div id="navbar-example" class="navbar navbar-static">
        <div class="navbar-inner">
          <div class="container" style="width: auto;">
            <ul class="nav megamenu" id="mm001demo">
            <li class="dropdown" data-module="Home">
              <div class="btn-group">
                <a class="cube btn btn-invisible btn-link" href="#" rel="tooltip" title="Dashboard"></a>
                <a id="HomeDrop" role="button" href="#" class="btn btn-invisible btn-link dropdown-toggle dtoggle" data-tour="tour-navbar-Home"><i class="icon-caret-down"></i></a>
              </div>
            </li>
            <li class="dropdown active" data-module="Contacts" data-menuindex="2">
              <a class="moreLink hide" href="#Contacts">Accounts</a>
              <div class="btn-group">
                <a class="btn btn-invisible btn-link routeLink" href="#Contacts">Accounts</a>
                <a id="ContactsDrop" role="button" href="javascript: void(0);" class="btn btn-invisible btn-link dropdown-toggle dtoggle" data-tour="tour-navbar-Contacts" data-toggle="dropdown"><i class="icon-caret-down"></i></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="ContactsDrop">
                    <li><a class="actionLink" tabindex="-1" data-event="megamenu:create:click" href="javascript: void(0)"><i class="icon-plus"></i>Create Contact</a></li>
                    <li class=""><a class="actionLink" tabindex="-1" href="#Contacts/vcard-import"><i class="icon-plus"></i>Create Contact From vCard</a></li>
                    <li><a class="actionLink" tabindex="-1" href="#Contacts"><i class="icon-reorder"></i>View Contacts</a></li>
                    <li><a class="actionLink" tabindex="-1" href="#bwc/index.php?module=Reports&amp;action=index&amp;view=contacts"><i class="icon-bar-chart"></i>View Contact Reports</a></li>
                    <li><a class="actionLink" tabindex="-1" href="#bwc/index.php?module=Import&amp;action=Step1&amp;import_module=Contacts&amp;return_module=Contacts&amp;return_action=index"><i class="icon-upload"></i>Import Contacts</a></li>
                  <div class="recentContainer hide"></div>
                  <div class="favoritesContainer hide"></div>
                </ul>
              </div>
            </li>
            <li class="dropdown" data-module="Contacts" data-menuindex="2">
              <a class="moreLink hide" href="#Contacts">Contacts</a>
              <div class="btn-group">
                <a class="btn btn-invisible btn-link routeLink" href="#Contacts">Contacts</a>
                <a id="ContactsDrop" role="button" href="javascript: void(0);" class="btn btn-invisible btn-link dropdown-toggle dtoggle" data-tour="tour-navbar-Contacts" data-toggle="dropdown"><i class="icon-caret-down"></i></a>
              </div>
            </li>
            <li class="dropdown open" data-module="Contacts" data-menuindex="2">
              <a class="moreLink hide" href="#Contacts">Leads</a>
              <div class="btn-group open">
                <a class="btn btn-invisible btn-link routeLink" href="#Contacts">Leads</a>
                <a id="ContactsDrop" role="button" href="javascript: void(0);" class="btn btn-invisible btn-link dropdown-toggle dtoggle" data-tour="tour-navbar-Contacts" data-toggle="dropdown"><i class="icon-caret-down"></i></a>
                <div class="dropdown-menu">
                  <ul class="" role="menu" aria-labelledby="ContactsDrop">
                      <li><a class="actionLink" tabindex="-1" data-event="megamenu:create:click" href="javascript: void(0)"><i class="icon-plus"></i>Create Contact</a></li>
                      <li class=""><a class="actionLink" tabindex="-1" href="#Contacts/vcard-import"><i class="icon-plus"></i>Create Contact From vCard</a></li>
                      <li><a class="actionLink" tabindex="-1" href="#Contacts"><i class="icon-reorder"></i>View Contacts</a></li>
                      <li><a class="actionLink" tabindex="-1" href="#bwc/index.php?module=Reports&amp;action=index&amp;view=contacts"><i class="icon-bar-chart"></i>View Contact Reports</a></li>
                      <li><a class="actionLink" tabindex="-1" href="#bwc/index.php?module=Reports&amp;action=index&amp;view=contacts"><i class="icon-bar-chart"></i>View Contact Reports</a></li>
                      <li><a class="actionLink" tabindex="-1" href="#bwc/index.php?module=Reports&amp;action=index&amp;view=contacts"><i class="icon-bar-chart"></i>View Contact Reports</a></li>
                      <li><a class="actionLink" tabindex="-1" href="#bwc/index.php?module=Reports&amp;action=index&amp;view=contacts"><i class="icon-bar-chart"></i>View Contact Reports</a></li>
                      <li><a class="actionLink" tabindex="-1" href="#bwc/index.php?module=Reports&amp;action=index&amp;view=contacts"><i class="icon-bar-chart"></i>View Contact Reports</a></li>
                      <li><a class="actionLink" tabindex="-1" href="#bwc/index.php?module=Reports&amp;action=index&amp;view=contacts"><i class="icon-bar-chart"></i>View Contact Reports</a></li>
                      <li><a class="actionLink" tabindex="-1" href="#bwc/index.php?module=Reports&amp;action=index&amp;view=contacts"><i class="icon-bar-chart"></i>View Contact Reports</a></li>
                      <li><a class="actionLink" tabindex="-1" href="#bwc/index.php?module=Reports&amp;action=index&amp;view=contacts"><i class="icon-bar-chart"></i>View Contact Reports</a></li>
                      <li><a class="actionLink" tabindex="-1" href="#bwc/index.php?module=Reports&amp;action=index&amp;view=contacts"><i class="icon-bar-chart"></i>View Contact Reports</a></li>
                      <li><a class="actionLink" tabindex="-1" href="#bwc/index.php?module=Reports&amp;action=index&amp;view=contacts"><i class="icon-bar-chart"></i>View Contact Reports</a></li>
                      <li><a class="actionLink" tabindex="-1" href="#bwc/index.php?module=Reports&amp;action=index&amp;view=contacts"><i class="icon-bar-chart"></i>View Contact Reports</a></li>
                      <li><a class="actionLink" tabindex="-1" href="#bwc/index.php?module=Reports&amp;action=index&amp;view=contacts"><i class="icon-bar-chart"></i>View Contact Reports</a></li>
                      <li><a class="actionLink" tabindex="-1" href="#bwc/index.php?module=Reports&amp;action=index&amp;view=contacts"><i class="icon-bar-chart"></i>View Contact Reports</a></li>
                      <li><a class="actionLink" tabindex="-1" href="#bwc/index.php?module=Reports&amp;action=index&amp;view=contacts"><i class="icon-bar-chart"></i>View Contact Reports</a></li>
                      <li><a class="actionLink" tabindex="-1" href="#bwc/index.php?module=Reports&amp;action=index&amp;view=contacts"><i class="icon-bar-chart"></i>View Contact Reports</a></li>
                      <li><a class="actionLink" tabindex="-1" href="#bwc/index.php?module=Import&amp;action=Step1&amp;import_module=Contacts&amp;return_module=Contacts&amp;return_action=index"><i class="icon-upload"></i>Import Contacts</a></li>
                      <div class="recentContainer hide"></div>
                      <div class="favoritesContainer hide"></div>
                  </ul>
                </div>
              </div>
            </li>
            </ul>
          </div>
        </div>
      </div> <!-- /navbar-example -->
      <hr>
    </div>
  </div>
</section>
',
      'base_icons' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
<!-- Icons
================================================== -->
<section id="icons">
  <div class="page-header">
    <h1>Font Awesome Icons <small>without images.</small></h1>
  </div>
  <p>Inspired by the Glyphicon set that comes with <a href="http://twitter.github.com/bootstrap/" target="_blank">Twitter Bootstrap 2.0</a>, Font Awesome is designed from scratch for a full array of web-related actions.</p>
</section>

<section id="icons-new">
  <div class="row-fluid">
    <div class="span12">
      <h3 class="page-header">New Icons in 3.0</h3>
      <p>
        You asked, Font Awesome delivers with 40 shiny new icons in version 3.0. New icons can be requested on the
        <a href="https://github.com/FortAwesome/Font-Awesome" target="_blank">Font Awesome GitHub project</a>. Or even
        better, you can <a href="#contribute">contribute your own icons</a>.
      </p>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span3">
      <ul class="the-icons">
        <li><i class="icon-cloud-download"></i> icon-cloud-download</li>
        <li><i class="icon-cloud-upload"></i> icon-cloud-upload</li>
        <li><i class="icon-lightbulb"></i> icon-lightbulb</li>
        <li><i class="icon-exchange"></i> icon-exchange</li>
        <li><i class="icon-bell-alt"></i> icon-bell-alt</li>
        <li><i class="icon-file-alt"></i> icon-file-alt</li>
        <li><i class="icon-beer"></i> icon-beer</li>
        <li><i class="icon-coffee"></i> icon-coffee</li>
        <li><i class="icon-food"></i> icon-food</li>
        <li><i class="icon-fighter-jet"></i> icon-fighter-jet</li>
      </ul>
    </div>
    <div class="span3">
      <ul class="the-icons">
        <li><i class="icon-user-md"></i> icon-user-md</li>
        <li><i class="icon-stethoscope"></i> icon-stethoscope</li>
        <li><i class="icon-suitcase"></i> icon-suitcase</li>
        <li><i class="icon-building"></i> icon-building</li>
        <li><i class="icon-hospital"></i> icon-hospital</li>
        <li><i class="icon-ambulance"></i> icon-ambulance</li>
        <li><i class="icon-medkit"></i> icon-medkit</li>
        <li><i class="icon-h-sign"></i> icon-h-sign</li>
        <li><i class="icon-plus-sign-alt"></i> icon-plus-sign-alt</li>
        <li><i class="icon-spinner"></i> icon-spinner</li>
      </ul>
    </div>
    <div class="span3">
      <ul class="the-icons">
        <li><i class="icon-angle-left"></i> icon-angle-left</li>
        <li><i class="icon-angle-right"></i> icon-angle-right</li>
        <li><i class="icon-angle-up"></i> icon-angle-up</li>
        <li><i class="icon-angle-down"></i> icon-angle-down</li>
        <li><i class="icon-double-angle-left"></i> icon-double-angle-left</li>
        <li><i class="icon-double-angle-right"></i> icon-double-angle-right</li>
        <li><i class="icon-double-angle-up"></i> icon-double-angle-up</li>
        <li><i class="icon-double-angle-down"></i> icon-double-angle-down</li>
        <li><i class="icon-circle-blank"></i> icon-circle-blank</li>
        <li><i class="icon-circle"></i> icon-circle</li>
      </ul>
    </div>
    <div class="span3">
      <ul class="the-icons">
        <li><i class="icon-desktop"></i> icon-desktop</li>
        <li><i class="icon-laptop"></i> icon-laptop</li>
        <li><i class="icon-tablet"></i> icon-tablet</li>
        <li><i class="icon-mobile-phone"></i> icon-mobile-phone</li>
        <li><i class="icon-quote-left"></i> icon-quote-left</li>
        <li><i class="icon-quote-right"></i> icon-quote-right</li>
        <li><i class="icon-reply"></i> icon-reply</li>
        <li><i class="icon-github-alt"></i> icon-github-alt</li>
        <li><i class="icon-folder-close-alt"></i> icon-folder-close-alt</li>
        <li><i class="icon-folder-open-alt"></i> icon-folder-open-alt</li>
      </ul>
    </div>
  </div>
</section>

<section id="icons-web-app">
  <div class="row-fluid">
    <div class="span12">
      <h3 class="page-header">Web Application Icons</h3>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span3">
      <ul class="the-icons">
        <li><i class="icon-adjust"></i> icon-adjust</li>
        <li><i class="icon-asterisk"></i> icon-asterisk</li>
        <li><i class="icon-ban-circle"></i> icon-ban-circle</li>
        <li><i class="icon-bar-chart"></i> icon-bar-chart</li>
        <li><i class="icon-barcode"></i> icon-barcode</li>
        <li><i class="icon-beaker"></i> icon-beaker</li>
        <li><i class="icon-beer"></i> icon-beer</li>
        <li><i class="icon-bell"></i> icon-bell</li>
        <li><i class="icon-bell-alt"></i> icon-bell-alt</li>
        <li><i class="icon-bolt"></i> icon-bolt</li>
        <li><i class="icon-book"></i> icon-book</li>
        <li><i class="icon-bookmark"></i> icon-bookmark</li>
        <li><i class="icon-bookmark-empty"></i> icon-bookmark-empty</li>
        <li><i class="icon-briefcase"></i> icon-briefcase</li>
        <li><i class="icon-bullhorn"></i> icon-bullhorn</li>
        <li><i class="icon-calendar"></i> icon-calendar</li>
        <li><i class="icon-camera"></i> icon-camera</li>
        <li><i class="icon-camera-retro"></i> icon-camera-retro</li>
        <li><i class="icon-certificate"></i> icon-certificate</li>
        <li><i class="icon-check"></i> icon-check</li>
        <li><i class="icon-check-empty"></i> icon-check-empty</li>
        <li><i class="icon-circle"></i> icon-circle</li>
        <li><i class="icon-circle-blank"></i> icon-circle-blank</li>
        <li><i class="icon-cloud"></i> icon-cloud</li>
        <li><i class="icon-cloud-download"></i> icon-cloud-download</li>
        <li><i class="icon-cloud-upload"></i> icon-cloud-upload</li>
        <li><i class="icon-coffee"></i> icon-coffee</li>
        <li><i class="icon-cog"></i> icon-cog</li>
        <li><i class="icon-cogs"></i> icon-cogs</li>
        <li><i class="icon-comment"></i> icon-comment</li>
        <li><i class="icon-comment-alt"></i> icon-comment-alt</li>
        <li><i class="icon-comments"></i> icon-comments</li>
        <li><i class="icon-comments-alt"></i> icon-comments-alt</li>
        <li><i class="icon-credit-card"></i> icon-credit-card</li>
        <li><i class="icon-dashboard"></i> icon-dashboard</li>
        <li><i class="icon-desktop"></i> icon-desktop</li>
        <li><i class="icon-download"></i> icon-download</li>
        <li><i class="icon-download-alt"></i> icon-download-alt</li>
      </ul>
    </div>
    <div class="span3">
      <ul class="the-icons">
        <li><i class="icon-edit"></i> icon-edit</li>
        <li><i class="icon-envelope"></i> icon-envelope</li>
        <li><i class="icon-envelope-alt"></i> icon-envelope-alt</li>
        <li><i class="icon-exchange"></i> icon-exchange</li>
        <li><i class="icon-exclamation-sign"></i> icon-exclamation-sign</li>
        <li><i class="icon-external-link"></i> icon-external-link</li>
        <li><i class="icon-eye-close"></i> icon-eye-close</li>
        <li><i class="icon-eye-open"></i> icon-eye-open</li>
        <li><i class="icon-facetime-video"></i> icon-facetime-video</li>
        <li><i class="icon-fighter-jet"></i> icon-fighter-jet</li>
        <li><i class="icon-film"></i> icon-film</li>
        <li><i class="icon-filter"></i> icon-filter</li>
        <li><i class="icon-fire"></i> icon-fire</li>
        <li><i class="icon-flag"></i> icon-flag</li>
        <li><i class="icon-folder-close"></i> icon-folder-close</li>
        <li><i class="icon-folder-open"></i> icon-folder-open</li>
        <li><i class="icon-folder-close-alt"></i> icon-folder-close-alt</li>
        <li><i class="icon-folder-open-alt"></i> icon-folder-open-alt</li>
        <li><i class="icon-food"></i> icon-food</li>
        <li><i class="icon-gift"></i> icon-gift</li>
        <li><i class="icon-glass"></i> icon-glass</li>
        <li><i class="icon-globe"></i> icon-globe</li>
        <li><i class="icon-group"></i> icon-group</li>
        <li><i class="icon-hdd"></i> icon-hdd</li>
        <li><i class="icon-headphones"></i> icon-headphones</li>
        <li><i class="icon-heart"></i> icon-heart</li>
        <li><i class="icon-heart-empty"></i> icon-heart-empty</li>
        <li><i class="icon-home"></i> icon-home</li>
        <li><i class="icon-inbox"></i> icon-inbox</li>
        <li><i class="icon-info-sign"></i> icon-info-sign</li>
        <li><i class="icon-key"></i> icon-key</li>
        <li><i class="icon-leaf"></i> icon-leaf</li>
        <li><i class="icon-laptop"></i> icon-laptop</li>
        <li><i class="icon-legal"></i> icon-legal</li>
        <li><i class="icon-lemon"></i> icon-lemon</li>
        <li><i class="icon-lightbulb"></i> icon-lightbulb</li>
        <li><i class="icon-lock"></i> icon-lock</li>
        <li><i class="icon-unlock"></i> icon-unlock</li>
      </ul>
    </div>
    <div class="span3">
      <ul class="the-icons">
        <li><i class="icon-magic"></i> icon-magic</li>
        <li><i class="icon-magnet"></i> icon-magnet</li>
        <li><i class="icon-map-marker"></i> icon-map-marker</li>
        <li><i class="icon-minus"></i> icon-minus</li>
        <li><i class="icon-minus-sign"></i> icon-minus-sign</li>
        <li><i class="icon-mobile-phone"></i> icon-mobile-phone</li>
        <li><i class="icon-money"></i> icon-money</li>
        <li><i class="icon-move"></i> icon-move</li>
        <li><i class="icon-music"></i> icon-music</li>
        <li><i class="icon-off"></i> icon-off</li>
        <li><i class="icon-ok"></i> icon-ok</li>
        <li><i class="icon-ok-circle"></i> icon-ok-circle</li>
        <li><i class="icon-ok-sign"></i> icon-ok-sign</li>
        <li><i class="icon-pencil"></i> icon-pencil</li>
        <li><i class="icon-picture"></i> icon-picture</li>
        <li><i class="icon-plane"></i> icon-plane</li>
        <li><i class="icon-plus"></i> icon-plus</li>
        <li><i class="icon-plus-sign"></i> icon-plus-sign</li>
        <li><i class="icon-print"></i> icon-print</li>
        <li><i class="icon-pushpin"></i> icon-pushpin</li>
        <li><i class="icon-qrcode"></i> icon-qrcode</li>
        <li><i class="icon-question-sign"></i> icon-question-sign</li>
        <li><i class="icon-quote-left"></i> icon-quote-left</li>
        <li><i class="icon-quote-right"></i> icon-quote-right</li>
        <li><i class="icon-random"></i> icon-random</li>
        <li><i class="icon-refresh"></i> icon-refresh</li>
        <li><i class="icon-remove"></i> icon-remove</li>
        <li><i class="icon-remove-circle"></i> icon-remove-circle</li>
        <li><i class="icon-remove-sign"></i> icon-remove-sign</li>
        <li><i class="icon-reorder"></i> icon-reorder</li>
        <li><i class="icon-reply"></i> icon-reply</li>
        <li><i class="icon-resize-horizontal"></i> icon-resize-horizontal</li>
        <li><i class="icon-resize-vertical"></i> icon-resize-vertical</li>
        <li><i class="icon-retweet"></i> icon-retweet</li>
        <li><i class="icon-road"></i> icon-road</li>
        <li><i class="icon-rss"></i> icon-rss</li>
        <li><i class="icon-screenshot"></i> icon-screenshot</li>
        <li><i class="icon-search"></i> icon-search</li>
      </ul>
    </div>
    <div class="span3">
      <ul class="the-icons">
        <li><i class="icon-share"></i> icon-share</li>
        <li><i class="icon-share-alt"></i> icon-share-alt</li>
        <li><i class="icon-shopping-cart"></i> icon-shopping-cart</li>
        <li><i class="icon-signal"></i> icon-signal</li>
        <li><i class="icon-signin"></i> icon-signin</li>
        <li><i class="icon-signout"></i> icon-signout</li>
        <li><i class="icon-sitemap"></i> icon-sitemap</li>
        <li><i class="icon-sort"></i> icon-sort</li>
        <li><i class="icon-sort-down"></i> icon-sort-down</li>
        <li><i class="icon-sort-up"></i> icon-sort-up</li>
        <li><i class="icon-spinner"></i> icon-spinner</li>
        <li><i class="icon-star"></i> icon-star</li>
        <li><i class="icon-star-empty"></i> icon-star-empty</li>
        <li><i class="icon-star-half"></i> icon-star-half</li>
        <li><i class="icon-tablet"></i> icon-tablet</li>
        <li><i class="icon-tag"></i> icon-tag</li>
        <li><i class="icon-tags"></i> icon-tags</li>
        <li><i class="icon-tasks"></i> icon-tasks</li>
        <li><i class="icon-thumbs-down"></i> icon-thumbs-down</li>
        <li><i class="icon-thumbs-up"></i> icon-thumbs-up</li>
        <li><i class="icon-time"></i> icon-time</li>
        <li><i class="icon-tint"></i> icon-tint</li>
        <li><i class="icon-trash"></i> icon-trash</li>
        <li><i class="icon-trophy"></i> icon-trophy</li>
        <li><i class="icon-truck"></i> icon-truck</li>
        <li><i class="icon-umbrella"></i> icon-umbrella</li>
        <li><i class="icon-upload"></i> icon-upload</li>
        <li><i class="icon-upload-alt"></i> icon-upload-alt</li>
        <li><i class="icon-user"></i> icon-user</li>
        <li><i class="icon-user-md"></i> icon-user-md</li>
        <li><i class="icon-volume-off"></i> icon-volume-off</li>
        <li><i class="icon-volume-down"></i> icon-volume-down</li>
        <li><i class="icon-volume-up"></i> icon-volume-up</li>
        <li><i class="icon-warning-sign"></i> icon-warning-sign</li>
        <li><i class="icon-wrench"></i> icon-wrench</li>
        <li><i class="icon-zoom-in"></i> icon-zoom-in</li>
        <li><i class="icon-zoom-out"></i> icon-zoom-out</li>
      </ul>
    </div>
  </div>
</section>

<section id="icons-text-editor">
  <div class="row-fluid">
    <div class="span12">
      <h3 class="page-header">Text Editor Icons</h3>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span3">
      <ul class="the-icons">
        <li><i class="icon-file"></i> icon-file</li>
        <li><i class="icon-file-alt"></i> icon-file-alt</li>
        <li><i class="icon-cut"></i> icon-cut</li>
        <li><i class="icon-copy"></i> icon-copy</li>
        <li><i class="icon-paste"></i> icon-paste</li>
        <li><i class="icon-save"></i> icon-save</li>
        <li><i class="icon-undo"></i> icon-undo</li>
        <li><i class="icon-repeat"></i> icon-repeat</li>
      </ul>
    </div>
    <div class="span3">
      <ul class="the-icons">
        <li><i class="icon-text-height"></i> icon-text-height</li>
        <li><i class="icon-text-width"></i> icon-text-width</li>
        <li><i class="icon-align-left"></i> icon-align-left</li>
        <li><i class="icon-align-center"></i> icon-align-center</li>
        <li><i class="icon-align-right"></i> icon-align-right</li>
        <li><i class="icon-align-justify"></i> icon-align-justify</li>
        <li><i class="icon-indent-left"></i> icon-indent-left</li>
        <li><i class="icon-indent-right"></i> icon-indent-right</li>
      </ul>
    </div>
    <div class="span3">
      <ul class="the-icons">
        <li><i class="icon-font"></i> icon-font</li>
        <li><i class="icon-bold"></i> icon-bold</li>
        <li><i class="icon-italic"></i> icon-italic</li>
        <li><i class="icon-strikethrough"></i> icon-strikethrough</li>
        <li><i class="icon-underline"></i> icon-underline</li>
        <li><i class="icon-link"></i> icon-link</li>
        <li><i class="icon-paper-clip"></i> icon-paper-clip</li>
        <li><i class="icon-columns"></i> icon-columns</li>
      </ul>
    </div>
    <div class="span3">
      <ul class="the-icons">
        <li><i class="icon-table"></i> icon-table</li>
        <li><i class="icon-th-large"></i> icon-th-large</li>
        <li><i class="icon-th"></i> icon-th</li>
        <li><i class="icon-th-list"></i> icon-th-list</li>
        <li><i class="icon-list"></i> icon-list</li>
        <li><i class="icon-list-ol"></i> icon-list-ol</li>
        <li><i class="icon-list-ul"></i> icon-list-ul</li>
        <li><i class="icon-list-alt"></i> icon-list-alt</li>
      </ul>
    </div>
  </div>
</section>

<section id="icons-directional">
  <div class="row-fluid">
    <div class="span12">
      <h3 class="page-header">Directional Icons</h3>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span3">
      <ul class="the-icons">
        <li><i class="icon-angle-left"></i> icon-angle-left</li>
        <li><i class="icon-angle-right"></i> icon-angle-right</li>
        <li><i class="icon-angle-up"></i> icon-angle-up</li>
        <li><i class="icon-angle-down"></i> icon-angle-down</li>
        <li><i class="icon-arrow-down"></i> icon-arrow-down</li>
        <li><i class="icon-arrow-left"></i> icon-arrow-left</li>
        <li><i class="icon-arrow-right"></i> icon-arrow-right</li>
        <li><i class="icon-arrow-up"></i> icon-arrow-up</li>
      </ul>
    </div>
    <div class="span3">
      <ul class="the-icons">
        <li><i class="icon-caret-down"></i> icon-caret-down</li>
        <li><i class="icon-caret-left"></i> icon-caret-left</li>
        <li><i class="icon-caret-right"></i> icon-caret-right</li>
        <li><i class="icon-caret-up"></i> icon-caret-up</li>
        <li><i class="icon-chevron-down"></i> icon-chevron-down</li>
        <li><i class="icon-chevron-left"></i> icon-chevron-left</li>
        <li><i class="icon-chevron-right"></i> icon-chevron-right</li>
        <li><i class="icon-chevron-up"></i> icon-chevron-up</li>
      </ul>
    </div>
    <div class="span3">
      <ul class="the-icons">
        <li><i class="icon-circle-arrow-down"></i> icon-circle-arrow-down</li>
        <li><i class="icon-circle-arrow-left"></i> icon-circle-arrow-left</li>
        <li><i class="icon-circle-arrow-right"></i> icon-circle-arrow-right</li>
        <li><i class="icon-circle-arrow-up"></i> icon-circle-arrow-up</li>
        <li><i class="icon-double-angle-left"></i> icon-double-angle-left</li>
        <li><i class="icon-double-angle-right"></i> icon-double-angle-right</li>
        <li><i class="icon-double-angle-up"></i> icon-double-angle-up</li>
        <li><i class="icon-double-angle-down"></i> icon-double-angle-down</li>
      </ul>
    </div>
    <div class="span3">
      <ul class="the-icons">
        <li><i class="icon-hand-down"></i> icon-hand-down</li>
        <li><i class="icon-hand-left"></i> icon-hand-left</li>
        <li><i class="icon-hand-right"></i> icon-hand-right</li>
        <li><i class="icon-hand-up"></i> icon-hand-up</li>
        <li><i class="icon-circle"></i> icon-circle</li>
        <li><i class="icon-circle-blank"></i> icon-circle-blank</li>
      </ul>
    </div>
  </div>
</section>

<section id="icons-video-player">
  <div class="row-fluid">
    <div class="span12">
      <h3 class="page-header">Video Player Icons</h3>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span3">
      <ul class="the-icons">
        <li><i class="icon-play-circle"></i> icon-play-circle</li>
        <li><i class="icon-play"></i> icon-play</li>
        <li><i class="icon-pause"></i> icon-pause</li>
        <li><i class="icon-stop"></i> icon-stop</li>
      </ul>
    </div>
    <div class="span3">
      <ul class="the-icons">
        <li><i class="icon-step-backward"></i> icon-step-backward</li>
        <li><i class="icon-fast-backward"></i> icon-fast-backward</li>
        <li><i class="icon-backward"></i> icon-backward</li>
        <li><i class="icon-forward"></i> icon-forward</li>
      </ul>
    </div>
    <div class="span3">
      <ul class="the-icons">
        <li><i class="icon-fast-forward"></i> icon-fast-forward</li>
        <li><i class="icon-step-forward"></i> icon-step-forward</li>
        <li><i class="icon-eject"></i> icon-eject</li>
      </ul>
    </div>
    <div class="span3">
      <ul class="the-icons">
        <li><i class="icon-fullscreen"></i> icon-fullscreen</li>
        <li><i class="icon-resize-full"></i> icon-resize-full</li>
        <li><i class="icon-resize-small"></i> icon-resize-small</li>
      </ul>
    </div>
  </div>
</section>

<section id="icons-social">
  <div class="row-fluid">
    <div class="span12">
      <h3 class="page-header">Social Icons</h3>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span3">
      <ul class="the-icons">
        <li><i class="icon-phone"></i> icon-phone</li>
        <li><i class="icon-phone-sign"></i> icon-phone-sign</li>
        <li><i class="icon-facebook"></i> icon-facebook</li>
        <li><i class="icon-facebook-sign"></i> icon-facebook-sign</li>
      </ul>
    </div>
    <div class="span3">
      <ul class="the-icons">
        <li><i class="icon-twitter"></i> icon-twitter</li>
        <li><i class="icon-twitter-sign"></i> icon-twitter-sign</li>
        <li><i class="icon-github"></i> icon-github</li>
        <li><i class="icon-github-alt"></i> icon-github-alt</li>
      </ul>
    </div>
    <div class="span3">
      <ul class="the-icons">
        <li><i class="icon-github-sign"></i> icon-github-sign</li>
        <li><i class="icon-linkedin"></i> icon-linkedin</li>
        <li><i class="icon-linkedin-sign"></i> icon-linkedin-sign</li>
        <li><i class="icon-pinterest"></i> icon-pinterest</li>
      </ul>
    </div>
    <div class="span3">
      <ul class="the-icons">
        <li><i class="icon-pinterest-sign"></i> icon-pinterest-sign</li>
        <li><i class="icon-google-plus"></i> icon-google-plus</li>
        <li><i class="icon-google-plus-sign"></i> icon-google-plus-sign</li>
        <li><i class="icon-sign-blank"></i> icon-sign-blank</li>
      </ul>
    </div>
  </div>
</section>

<section id="icons-medical">
  <div class="row-fluid">
    <div class="span12">
      <h3 class="page-header">Medical Icons <small>Want to change healthcare? Work with me at <a href="#kyruus">Kyruus</a>.</small></h3>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span3">
      <ul class="the-icons">
        <li><i class="icon-ambulance"></i> icon-ambulance</li>
        <li><i class="icon-beaker"></i> icon-beaker</li>
      </ul>
    </div>
    <div class="span3">
      <ul class="the-icons">
        <li><i class="icon-h-sign"></i> icon-h-sign</li>
        <li><i class="icon-hospital"></i> icon-hospital</li>
      </ul>
    </div>
    <div class="span3">
      <ul class="the-icons">
        <li><i class="icon-medkit"></i> icon-medkit</li>
        <li><i class="icon-plus-sign-alt"></i> icon-plus-sign-alt</li>
      </ul>
    </div>
    <div class="span3">
      <ul class="the-icons">
        <li><i class="icon-stethoscope"></i> icon-stethoscope</li>
        <li><i class="icon-user-md"></i> icon-user-md</li>
      </ul>
    </div>
  </div>
</section>


<section id="examples">
  <div class="row-fluid">
    <div class="span12">
      <h3 class="page-header">Examples</h3>
      <p>Many examples re-used from the Twitter Bootstrap documentation.</p>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span3">
      <div class="well well-transparent">
        <p>Use Font Awesome icons in:</p>
        <ul class="icons">
          <li><i class="icon-ok"></i>Bulleted lists (like this one)</li>
          <li><i class="icon-ok"></i>Buttons</li>
          <li><i class="icon-ok"></i>Button groups</li>
          <li><i class="icon-ok"></i>Navigation</li>
          <li><i class="icon-ok"></i>Prepended form inputs</li>
          <li><i class="icon-ok"></i>And many more with Custom CSS</li>
        </ul>
      </div>
    </div>
    <div class="span5">
      <p>
        <a class="btn" href="#"><i class="icon-repeat"></i> Reload</a>
        <a class="btn btn-success" href="#"><i class="icon-shopping-cart icon-large"></i> Checkout</a>
        <a class="btn btn-danger" href="#"><i class="icon-trash icon-large"></i> Delete</a>
      </p>
      <p>
        <a class="btn btn-large btn-primary" href="#"><i class="icon-comment"></i> Comment</a>
        <a class="btn btn-small" href="#"><i class="icon-cog"></i> Settings</a>
        <a class="btn btn-small btn-info" href="#"><i class="icon-info-sign"></i> Info</a>
      </p>
      <div class="well" style="padding: 8px 0;">
        <ul class="nav nav-list">
          <li class="active"><a href="#"><i class="icon-home"></i> Home</a></li>
          <li><a href="#"><i class="icon-book"></i> Library</a></li>
          <li><a href="#"><i class="icon-pencil"></i> Applications</a></li>
          <li><a href="#"><i class="icon-cogs"></i> Settings</a></li>
        </ul>
      </div>
    </div>
    <div class="span4">
      <div class="btn-toolbar">
        <div class="btn-group">
          <a class="btn" href="#"><i class="icon-align-left"></i></a>
          <a class="btn" href="#"><i class="icon-align-center"></i></a>
          <a class="btn" href="#"><i class="icon-align-right"></i></a>
          <a class="btn" href="#"><i class="icon-align-justify"></i></a>
        </div>
        <div class="btn-group">
          <a class="btn btn-primary" href="#"><i class="icon-user"></i> User</a>
          <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-caret-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
            <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
            <li><a href="#"><i class="icon-ban-circle"></i> Ban</a></li>
            <li class="divider"></li>
            <li><a href="#"><i class="i"></i> Make admin</a></li>
          </ul>
        </div>
      </div>
      <form>
        <div class="control-group">
          <div class="controls">
            <div class="input-prepend">
              <span class="add-on"><i class="icon-envelope"></i></span>
              <input class="span2" id="inputIcon" type="text" placeholder="Email address">
            </div>
          </div>
        </div>
        <div class="control-group">
          <div class="controls">
            <div class="input-prepend">
              <span class="add-on"><i class="icon-key"></i></span>
              <input class="span2" id="inputIcon2" type="text" placeholder="Password">
            </div>
          </div>
        </div>
      </form>
      <div>
        <span class="rating">
          <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
        </span>
      </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span12">
      <h3 class="page-header">New Styles in 3.0</h3>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span3">
      <i class="icon-quote-left icon-4x pull-left icon-muted"></i>
      Use a few of the new styles together, and you\'ve got easy pull quotes or a great introductory article image.
      Or spinning icons for loading and refreshing content. Or fun big icons in multi-line buttons. Lots of new possibilities.
    </div>
    <div class="span5">
      <div class="well well-large well-transparent lead">
        <i class="icon-spinner icon-spin icon-2x pull-left"></i> Spinner icon when loading content...
      </div>
    </div>
    <div class="span4">
      <p>
        <a class="btn btn-large btn-danger" href="#"><i class="icon-flag icon-2x pull-left"></i>Font Awesome<br>Version 3.0</a>
      </p>
      <a class="btn btn-primary" href="#"><i class="icon-refresh icon-spin"></i> Synchronizing Content...</a>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span12">
      <h3 class="page-header">Example HTML</h3>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span12">
      <h4>Inline Icons</h4>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span3">
      <p>Place Font Awesome icons just about anywhere with the <code>&lt;i&gt;</code> tag.</p>
    </div>
    <div class="span5">
      <div class="well well-transparent">
        <div style="font-size: 24px; line-height: 1.5em;">
          <i class="icon-camera-retro"></i> icon-camera-retro
        </div>
      </div>
    </div>
    <div class="span4">
      <pre class="prettyprint linenums">
      &lt;i class="icon-camera-retro"&gt;&lt;/i&gt; icon-camera-retro
      </pre>
      <div class="alert alert-info">
        <i class="icon-info-sign"></i> Icon classes are echoed via CSS :before.
      </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span12">
      <h4>Larger Icons</h4>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span3">
      <p>
        To increase the size of icons relative to its container, use <code>icon-large</code>, <code>icon-2x</code>,
        <code>icon-3x</code>, or <code>icon-4x</code>.
      </p>
      <p>
        Increase the icon size by using the <code>icon-large</code> (33% increase), <code>icon-2x</code>,
        <code>icon-3x</code>, or <code>icon-4x</code> classes.
      </p>
    </div>
    <div class="span5">
      <div class="well well-transparent">
        <div style="font-size: 24px; line-height: 1.5em;">
          <p><i class="icon-camera-retro icon-large"></i> icon-camera-retro</p>
          <p><i class="icon-camera-retro icon-2x"></i> icon-camera-retro</p>
          <p><i class="icon-camera-retro icon-3x"></i> icon-camera-retro</p>
          <p><i class="icon-camera-retro icon-4x"></i> icon-camera-retro</p>
        </div>
      </div>
    </div>
    <div class="span4">
      <pre class="prettyprint linenums">
      &lt;p&gt;&lt;i class=&quot;icon-camera-retro icon-large&quot;&gt;&lt;/i&gt; icon-camera-retro&lt;/p&gt;
      &lt;p&gt;&lt;i class=&quot;icon-camera-retro icon-2x&quot;&gt;&lt;/i&gt; icon-camera-retro&lt;/p&gt;
      &lt;p&gt;&lt;i class=&quot;icon-camera-retro icon-3x&quot;&gt;&lt;/i&gt; icon-camera-retro&lt;/p&gt;
      &lt;p&gt;&lt;i class=&quot;icon-camera-retro icon-4x&quot;&gt;&lt;/i&gt; icon-camera-retro&lt;/p&gt;
      </pre>
      <div class="alert alert-info">
        <i class="icon-info-sign"></i> If your icons are getting chopped off on top and bottom, make sure you have
        sufficient line-height.
      </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span12">
      <h4>Animated Spinner</h4>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span3">
      <p>
        Use the <code>icon-spin</code> class to get any icon to rotate. Works best with <code>icon-spinner</code> and
        <code>icon-refresh</code>.
      </p>
    </div>
    <div class="span5">
      <div class="well well-large well-transparent lead">
        <i class="icon-spinner icon-spin"></i> Spinner icon when loading content...
      </div>
    </div>
    <div class="span4">
      <pre class="prettyprint linenums">
      &lt;i class=&quot;icon-spinner icon-spin&quot;&gt;&lt;/i&gt; Spinner icon when loading content...
      </pre>
      <p class="alert alert-info">
        <i class="icon-info-sign"></i> CSS3 animations aren\'t supported in IE7 - IE9.
      </p>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span12">
      <h4>Chart Icons</h4>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span3">
      <p>
        The Sugar chart types have icons created in svg. The svg code is available in the <code>/assets/js/chart-utils.js</code> page. SVG images can be scaled by setting their height and width.
      </p>
    </div>
    <div class="span5">
      <div class="well well-large well-transparent select2-container">
        <b>Donut</b>
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xl="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 40 40"><g stroke="none" stroke-opacity="1" stroke-dasharray="none" fill="none" fill-opacity="1"><g><path d="M 36 20.007558 C 36 28.835144 28.857008 36 20.022652 36 C 11.203398 36 4.0453044 28.835144 4.0453044 20.007558 C 4.0453044 11.164856 11.203398 4 20.022652 4 C 28.857008 4 36 11.164856 36 20.007558 Z" fill="#dfdfdf"/><path d="M 36 20.007558 C 36 28.835144 28.857008 36 20.022652 36 C 11.203398 36 4.0453044 28.835144 4.0453044 20.007558 C 4.0453044 11.164856 11.203398 4 20.022652 4 C 28.857008 4 36 11.164856 36 20.007558 Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/><path d="M 19.977348 20.068021 L 19.977348 4.060463 C 11.142992 4.060463 4 11.225319 4 20.068021 C 4 20.99008 4.0755073 21.927256 4.2416234 22.8342 Z" fill="#a6a6a6"/><path d="M 19.977348 20.068021 L 19.977348 4.060463 C 11.142992 4.060463 4 11.225319 4 20.068021 C 4 20.99008 4.0755073 21.927256 4.2416234 22.8342 Z" fill="#b3b3b3"/><path d="M 19.977348 20.068021 L 19.977348 4.060463 C 11.142992 4.060463 4 11.225319 4 20.068021 C 4 20.99008 4.0755073 21.927256 4.2416234 22.8342 Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/><path d="M 19.977348 20.068021 L 32.043417 9.5625886 C 28.932515 5.9952763 24.417178 3.9848843 19.69042 4.0755786 Z" fill="#838383"/><path d="M 19.977348 20.068021 L 32.043417 9.5625886 C 28.932515 5.9952763 24.417178 3.9848843 19.69042 4.0755786 Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/><path d="M 20.249174 14.943788 C 17.394998 14.943788 15.084474 17.256495 15.084474 20.128484 C 15.084474 22.985357 17.394998 25.298063 20.249174 25.298063 C 23.118452 25.298063 25.428976 22.985357 25.428976 20.128484 C 25.428976 17.256495 23.118452 14.943788 20.249174 14.943788 Z" fill="white"/><path d="M 20.249174 14.943788 C 17.394998 14.943788 15.084474 17.256495 15.084474 20.128484 C 15.084474 22.985357 17.394998 25.298063 20.249174 25.298063 C 23.118452 25.298063 25.428976 22.985357 25.428976 20.128484 C 25.428976 17.256495 23.118452 14.943788 20.249174 14.943788 Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></g></g></svg>
        <b>Funnel</b>
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xl="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 40 40"><g stroke="none" stroke-opacity="1" stroke-dasharray="none" fill="none" fill-opacity="1"><g><path d="M 4 3.83 L 36 3.83 L 32 12 L 8 12 Z" fill="#dfdfdf"/><path d="M 8 12 L 32 12 L 27 22 L 13 22 Z" fill="#b3b3b3"/><path d="M 13 22 L 20 36 L 27 22 Z" fill="#838383"/></g></g></svg>
        <b>Horizontal</b>
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xl="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 40 40"><g stroke="none" stroke-opacity="1" stroke-dasharray="none" fill="none" fill-opacity="1"><g><path d="M 28 4 L 28 12 L 4 12 L 4 4 L 28 4 Z" fill="#dfdfdf"/><path d="M 36 16 L 36 24 L 4 24 L 4 16 L 36 16 Z" fill="#b3b3b3"/><path d="M 20 28 L 20 36 L 4.0000009 36 L 4.0000009 28 L 20 28 Z" fill="#838383"/></g></g></svg>
        <b>Line</b>
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xl="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 40 40"><g stroke="none" stroke-opacity="1" stroke-dasharray="none" fill="none" fill-opacity="1"><path d="M 0 30.174306 L 18.83054 10.9825694 L 26.160149 23.790833 L 40 11.7056165 L 40 11.7056165" stroke="#636363" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></g></g></svg>
      </div>
      <div class="well well-large well-transparent select2-container">
        <b>Pareto</b>
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xl="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 40 40"><g stroke="none" stroke-opacity="1" stroke-dasharray="none" fill="none" fill-opacity="1"><g><path d="M 4 12 L 12 12 L 12 36 L 4 36 L 4 12 Z" fill="#dfdfdf"/><path d="M 16 4 L 24 4 L 24 36 L 16 36 L 16 4 Z" fill="#b3b3b3"/><path d="M 28 20 L 36 20 L 36 36 L 28 36 L 28 20 Z" fill="#838383"/><path d="M 62074205e-22 30.174306 L 18.83054 10.9825694 L 26.160149 23.790833 L 40 11.7056165 L 40 11.7056165" stroke="#636363" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></g></g></svg>
        <b>Pie</b>
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xl="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 40 40"><g stroke="none" stroke-opacity="1" stroke-dasharray="none" fill="none" fill-opacity="1"><g><path d="M 36 20.007558 C 36 28.835144 28.857008 36 20.022652 36 C 11.203398 36 4.0453044 28.835144 4.0453044 20.007558 C 4.0453044 11.164856 11.203398 4 20.022652 4 C 28.857008 4 36 11.164856 36 20.007558 Z" fill="#c1c1c1"/><path d="M 36 20.007558 C 36 28.835144 28.857008 36 20.022652 36 C 11.203398 36 4.0453044 28.835144 4.0453044 20.007558 C 4.0453044 11.164856 11.203398 4 20.022652 4 C 28.857008 4 36 11.164856 36 20.007558 Z" fill="#dfdfdf"/><path d="M 36 20.007558 C 36 28.835144 28.857008 36 20.022652 36 C 11.203398 36 4.0453044 28.835144 4.0453044 20.007558 C 4.0453044 11.164856 11.203398 4 20.022652 4 C 28.857008 4 36 11.164856 36 20.007558 Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/><path d="M 19.977348 20.068021 L 19.977348 4.060463 C 11.142992 4.060463 4 11.225319 4 20.068021 C 4 20.99008 4.0755073 21.927256 4.2416234 22.8342 Z" fill="#a6a6a6"/><path d="M 19.977348 20.068021 L 19.977348 4.060463 C 11.142992 4.060463 4 11.225319 4 20.068021 C 4 20.99008 4.0755073 21.927256 4.2416234 22.8342 Z" fill="#b3b3b3"/><path d="M 19.977348 20.068021 L 19.977348 4.060463 C 11.142992 4.060463 4 11.225319 4 20.068021 C 4 20.99008 4.0755073 21.927256 4.2416234 22.8342 Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/><path d="M 19.977348 20.068021 L 32.043417 9.5625886 C 28.932515 5.9952763 24.417178 3.9848843 19.69042 4.0755786 Z" fill="#838383"/><path d="M 19.977348 20.068021 L 32.043417 9.5625886 C 28.932515 5.9952763 24.417178 3.9848843 19.69042 4.0755786 Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></g></g></svg>
        <b>Stack</b>
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xl="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 40 40"><g stroke="none" stroke-opacity="1" stroke-dasharray="none" fill="none" fill-opacity="1"><g><path d="M 15.5 4 L 24.5 4 L 24.5 8 L 15.5 8 L 15.5 4 Z" fill="#dfdfdf"/><path d="M 15.5 10 L 24.5 10 L 24.5 24 L 15.5 24 L 15.5 10 Z" fill="#b3b3b3"/><path d="M 15.5 26 L 24.5 26 L 24.5 36 L 15.5 36 L 15.5 26 Z" fill="#838383"/><path d="M 27 12 L 36 12 L 36 16 L 27 16 L 27 12 Z" fill="#dfdfdf"/><path d="M 27 18 L 36 18 L 36 26 L 27 26 L 27 18 Z" fill="#b3b3b3"/><path d="M 27 28 L 36 28 L 36 36 L 27 36 L 27 28 Z" fill="#838383"/><path d="M 4 18 L 13 18 L 13 20 L 4 20 L 4 18 Z" fill="#dfdfdf"/><path d="M 4 22 L 13 22 L 13 30 L 4 30 L 4 22 Z" fill="#b3b3b3"/><path d="M 4 32 L 13 32 L 13 36 L 4 36 L 4 32 Z" fill="#838383"/></g></g></svg>
        <b>Vertical</b>
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xl="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 40 40"><g stroke="none" stroke-opacity="1" stroke-dasharray="none" fill="none" fill-opacity="1"><g><path d="M 4 12 L 12 12 L 12 36 L 4 36 L 4 12 Z" fill="#dfdfdf"/><path d="M 16 4 L 24 4 L 24 36 L 16 36 L 16 4 Z" fill="#b3b3b3"/><path d="M 28 20 L 36 20 L 36 36 L 28 36 L 28 20 Z" fill="#838383"/></g></g></svg>
      </div>
    </div>
    <div class="span4">
      <pre class="prettyprint linenums">
      &lt;script&gt;
        var myChartSvg = select2ChartIcon(\'funnel\');
      &lt;/script&gt;
      </pre>
    </div>
  </div>

<style>
  #sugar-cube {
    width: 80px;
    height: 80px;
    display: inline-block;
  }
  #sugar-cube.sc-small {
    width: 20px;
    height: 20px;
  }
  #sugar-cube.sc-large {
    width: 512px;
    height: 512px;
  }

  #sugar-cube .sc-left,
  #sugar-cube .sc-right,
  #sugar-cube .sc-top {
    fill:#ccc;
    stroke-width:0;
    /*stroke-linecap:butt;
    stroke:#000;
    stroke-linejoin:miter;
    stroke-opacity:1*/
  }
  #sugar-cube .sc-top {
    fill: #E41E26;
  }
  #sugar-cube .sc-right {
    fill: #CECCCB;
  }
  #sugar-cube .sc-left {
    fill: #343433;
  }

  #sugar-cube.sc-white path  {
    fill: #fff;
  }
  #sugar-cube.sc-white path.sc-top {
    opacity: 1;
  }
  #sugar-cube.sc-white path.sc-right {
    opacity: 0.8;
  }
  #sugar-cube.sc-white path.sc-left {
    opacity: 0.6;
  }
</style>


  <div class="row-fluid">
    <div class="span12">
      <h4>Filetype Thumbnails</h4>
    </div>
  </div>

  <div class="row-fluid">
    <div class="span3">
      <p>
        File type thumbnails are created by inserting a <code>span</code> tag with a classname of <code>.filetype-thumbnail</code> and adding a data-filetype property that is set to the file extension. If the file extension is one of "PDF,PNG,TXT,JPG,GIF,PPT,DOC,XLS" then it will have a colored background, else it will be grey. The last step is to insert the thumbmail SVG into the span.
      </p>
    </div>
    <div class="span5 filetype-thumbnails">
      <span class="filetype-thumbnail" data-filetype="PDF"></span>
      <span class="filetype-thumbnail" data-filetype="DOC"></span>
      <span class="filetype-thumbnail" data-filetype="PPT"></span>
      <span class="filetype-thumbnail" data-filetype="XLS"></span>
      <span class="filetype-thumbnail" data-filetype="PNG"></span>
      <span class="filetype-thumbnail" data-filetype="JPG"></span>
      <span class="filetype-thumbnail" data-filetype="GIF"></span>
      <span class="filetype-thumbnail" data-filetype="TXT"></span>
      <span class="filetype-thumbnail" data-filetype="XYZ"></span>
    </div>
    <div class="span4">
      <pre class="prettyprint linenums">
      &lt;script&gt;
      $(\'span[class^="filetype-"]\').each(function(){
        $(this).html( \'&lt;svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="28" height="33" id="filetype-svg2"&gt;&lt;g id="layer1"&gt;&lt;path d="m 1,1 19,0 7,7 0,24 -26,0 z" id="rect2985" style="fill:#ececec;stroke:#000000;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4" /&gt;&lt;path d="m 20,1 0,7 7,0 z" style="fill:#cccccc;stroke:#000000;stroke-width:1px;stroke-linecap:square;stroke-linejoin:round;" /&gt;&lt;/g&gt;&lt;/svg&gt;\' );
      });
      &lt;/script&gt;
      </pre>
    </div>
  </div>
<script>
  $(document).ready(function(){
    $(\'span[class^="filetype-"]\').each(function(){
      $(this).html( \'<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="28" height="33"><g><path class="ft-ribbon" d="M 0,15 0,29 3,29 3,13 z" /><path d="M 3,1 20.5,1 27,8 27,32 3,32 z" style="fill:#ececec;stroke:#b3b3b3;stroke-width:1;stroke-linecap:butt;" /><path d="m 20,1 0,7 7,0 z" style="fill:#b3b3b3;stroke-width:0" /></g></svg>\' );
    });
  });
</script>

  <div class="row-fluid">
    <div class="span12">
      <h4>The Sugar Cube</h4>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span3">
      <p></p>
    </div>
    <div class="span3" style="padding:20px 0">
      <p>
<svg id="sugar-cube" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" enable-background="new 0 0 512 512">
  <g>
    <path class="sc-top" d="M272.24,175c-10.35,4.079-27.267,4.079-37.579,0L48.178,101.127c-10.326-4.093-10.326-10.782,0-14.877 l186.483-73.841c10.312-4.097,27.229-4.097,37.579,0L458.712,86.25c10.325,4.096,10.325,10.784,0,14.877L272.24,175z"/>
    <path class="sc-left" d="M243.068,477.624c0,11.132-8.449,16.852-18.79,12.792L37.797,416.574 c-10.327-4.096-18.789-16.508-18.789-27.649V129.978c0-11.091,8.462-16.847,18.789-12.759l186.482,73.863 c10.34,4.074,18.79,16.518,18.79,27.646V477.624z"/>
    <path class="sc-right" d="M263.78,477.55c0,11.132,8.46,16.841,18.812,12.783l186.465-73.851c10.336-4.099,18.79-16.547,18.79-27.642 V129.918c0-11.119-8.454-16.885-18.79-12.784l-186.465,73.836c-10.352,4.103-18.812,16.551-18.812,27.646V477.55z"/>
  </g>
</svg>
      </p>
    </div>

    <div class="span2" style="background-color: #ddd;padding:20px 25px">
      <p>
<svg id="sugar-cube" class="sc-white" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" enable-background="new 0 0 512 512">
  <g class="sides">
    <path class="sc-top" d="M272.24,175c-10.35,4.079-27.267,4.079-37.579,0L48.178,101.127c-10.326-4.093-10.326-10.782,0-14.877 l186.483-73.841c10.312-4.097,27.229-4.097,37.579,0L458.712,86.25c10.325,4.096,10.325,10.784,0,14.877L272.24,175z"/>
    <path class="sc-left" d="M243.068,477.624c0,11.132-8.449,16.852-18.79,12.792L37.797,416.574 c-10.327-4.096-18.789-16.508-18.789-27.649V129.978c0-11.091,8.462-16.847,18.789-12.759l186.482,73.863 c10.34,4.074,18.79,16.518,18.79,27.646V477.624z"/>
    <path class="sc-right" d="M263.78,477.55c0,11.132,8.46,16.841,18.812,12.783l186.465-73.851c10.336-4.099,18.79-16.547,18.79-27.642 V129.918c0-11.119-8.454-16.885-18.79-12.784l-186.465,73.836c-10.352,4.103-18.812,16.551-18.812,27.646V477.55z"/>
  </g>
</svg>
      </p>
    </div>

    <div class="span3" style="padding:40px 0">
      <p>
<svg id="sugar-cube" class="sc-small icon-spin" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" enable-background="new 0 0 512 512">
  <g class="sides">
    <path class="sc-top" d="M272.24,175c-10.35,4.079-27.267,4.079-37.579,0L48.178,101.127c-10.326-4.093-10.326-10.782,0-14.877 l186.483-73.841c10.312-4.097,27.229-4.097,37.579,0L458.712,86.25c10.325,4.096,10.325,10.784,0,14.877L272.24,175z"/>
    <path class="sc-left" d="M243.068,477.624c0,11.132-8.449,16.852-18.79,12.792L37.797,416.574 c-10.327-4.096-18.789-16.508-18.789-27.649V129.978c0-11.091,8.462-16.847,18.789-12.759l186.482,73.863 c10.34,4.074,18.79,16.518,18.79,27.646V477.624z"/>
    <path class="sc-right" d="M263.78,477.55c0,11.132,8.46,16.841,18.812,12.783l186.465-73.851c10.336-4.099,18.79-16.547,18.79-27.642 V129.918c0-11.119-8.454-16.885-18.79-12.784l-186.465,73.836c-10.352,4.103-18.812,16.551-18.812,27.646V477.55z"/>
  </g>
</svg>
      </p>
    </div>

  </div>

  <div class="row-fluid">
    <div class="span3">
      <p>

      </p>
    </div>
    <div class="span9">
      <p>
<svg id="sugar-cube" class="sc-large" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
  <g class="sides">
    <path class="sc-top" d="M272.24,175c-10.35,4.079-27.267,4.079-37.579,0L48.178,101.127c-10.326-4.093-10.326-10.782,0-14.877 l186.483-73.841c10.312-4.097,27.229-4.097,37.579,0L458.712,86.25c10.325,4.096,10.325,10.784,0,14.877L272.24,175z"/>
    <path class="sc-left" d="M243.068,477.624c0,11.132-8.449,16.852-18.79,12.792L37.797,416.574 c-10.327-4.096-18.789-16.508-18.789-27.649V129.978c0-11.091,8.462-16.847,18.789-12.759l186.482,73.863 c10.34,4.074,18.79,16.518,18.79,27.646V477.624z"/>
    <path class="sc-right" d="M263.78,477.55c0,11.132,8.46,16.841,18.812,12.783l186.465-73.851c10.336-4.099,18.79-16.547,18.79-27.642 V129.918c0-11.119-8.454-16.885-18.79-12.784l-186.465,73.836c-10.352,4.103-18.812,16.551-18.812,27.646V477.55z"/>
  </g>
</svg>
      </p>
    </div>
  </div>

<style>
.filetype-thumbnails span[class^="filetype-"] {
  margin: 0 12px 12px 0;
  float: left;
}
</style>

</section>
',
      'forms_range' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}

<!-- Slider
================================================== -->
<section id="slider">
    <div class="page-header">
        <h1>Range Field <small>built with the noUiSlider jQuery plugin</small></h1>
    </div>
    <div class="row-fluid">
        <div class="span3 columns">
            <h3>About noUiSlider</h3>
            <p>noUiSlider is a little jQuery plugin that makes really cool (double) range sliders. Every slider can have two handles to select a range, a fixed minimum or maximum can be set to select a limit, or two handles can be used, to simply pick some points. </p>
            <p>The jquery.nouislider.js plugin is included in the default build of SugarCRM. [<a href="http://refreshless.com/nouislider/"><i class="icon-book"></i> Docs</a>]</p>
        </div>
        <div class="span9 columns">
            <h2>Sugar7 Example</h2>
            <div class="well" id="test_slider">
            </div>
            <div class="row-fluid record">
              <div class="span6">
                <label>Min: </label><input id="test_slider_min" value="0">
              </div>
              <div class="span6">
                <label>Max: </label><input id="test_slider_max" value="100">
              </div>
            </div>
            <hr>

            <h2>Using noUiSlider</h2>

            <h3>Markup</h3>
<pre class="prettyprint linenums">
&lt;div id="test_slider" class="noUiSlider"&gt;&lt;/div&gt;
&lt;input id="test_slider_min" value="0"&gt;
&lt;input id="test_slider_max" value="100"&gt;
</pre>

            <h3>JavaScript</h3>
<pre class="prettyprint linenums">
var fieldSettings = {
    view: this,
    def: { OPTIONS },
    viewName: \'edit\',
    context: this.context,
    module: this.module,
    model: this.model,
    meta: app.metadata.getField(\'range\')
},
rangeField = app.view.createField(fieldSettings);

this.$(\'#test_slider\').append(rangeField.el);
rangeField.render();

rangeField.sliderDoneDelegate = function(minField, maxField) {
    return function(value) {
        minField.val(value.min);
        maxField.val(value.max);
    };
}(this.$(\'#test_slider_min\'), this.$(\'#test_slider_max\'));
</pre>

            <h3>Options</h3>
            <table class="table table-bordered table-striped">
                <tbody><tr>
                    <th>Name</th>
                    <th>Parameter type</th>
                    <th>Possible parameter values</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>name</td>
                    <td>[VARCHAR]</td>
                    <td></td>
                    <td>Name of field in model.</td>
                </tr>
                <tr>
                    <td>type</td>
                    <td>[VARCHAR]</td>
                    <td>"range"</td>
                    <td>Field type.</td>
                </tr>
                <tr>
                    <td>view</td>
                    <td>[VARCHAR]</td>
                    <td>"edit", "detail"</td>
                    <td>Display mode for field.</td>
                </tr>
                <tr>
                    <td>sliderType</td>
                    <td>[VARCHAR]</td>
                    <td>"single", "upper", "lower", "double", "connected"</td>
                    <td>Type of knobs to display in slider.</td>
                </tr>
                <tr>
                    <td>minRange, maxRange</td>
                    <td>[INT]</td>
                    <td>Any value between 0 an 100. The value will be corrected to fit within the edges of the slider. The upper knob will not be place below and lower knob, and vice versa.</td>
                    <td>The position to move a knob to.</td>
                </tr>
                <tr>
                    <td>default</td>
                    <td>[BOOLEAN]</td>
                    <td>true, false</td>
                    <td></td>
                </tr>
                <tr>
                    <td>enabled</td>
                    <td>[BOOLEAN]</td>
                    <td>true, false</td>
                    <td>Whether or not the control is enabled.</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
',
    ),
  ),
  'sg-headerpane' => 
  array (
    'controller' => 
    array (
      'base' => '/*********************************************************************************
     * By installing or using this file, you are confirming on behalf of the entity
     * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
     * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
     * http://www.sugarcrm.com/master-subscription-agreement
     *
     * If Company is not bound by the MSA, then by installing or using this file
     * you are agreeing unconditionally that Company will be bound by the MSA and
     * certifying that you have authority to bind Company accordingly.
     *
     * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
     ********************************************************************************/
({className:\'headerpane\',pageData:{},section:{},page:{},section_page:false,parent_link:\'\',file:\'\',keys:[],initialize:function(options){var self=this,keys=[];app.view.View.prototype.initialize.call(this,options);this.pageData=options.meta.page_data;this.file=this.context.get(\'page_name\');if(this.file&&this.file!==\'\'){keys=this.file.split(\'_\');}
this.keys=keys;if(keys.length){if(keys[0]===\'index\'){if(keys.length>1){this.section=this.pageData[keys[1]];}else{this.section=this.pageData[keys[0]];}
this.section_page=true;this.file=\'index\';}else if(keys.length>1){this.section=this.pageData[keys[0]];this.page=this.section.pages[keys[1]];this.parent_link=\'_\'+keys[0];}else{this.section=this.pageData[keys[0]];}}},_render:function(){var self=this,$find;app.view.View.prototype._render.call(this);$find=$(\'#find_patterns\');if($find.length)
{var $optgroup;$.each(this.pageData,function(k,v){if(!v.index)return;$optgroup=$(\'<optgroup>\').appendTo($find).attr(\'label\',v.title);$.each(v.pages,function(i,d){renderSearchOption(k,i,d,$optgroup);});});$find.on(\'change\',function(e){window.location.href=$(this).val();});$find.select2();}
function renderSearchOption(section,page,d,optgroup){$(\'<option>\').appendTo(optgroup).attr(\'value\',(d.url?d.url:fmtLink(section,page))).text(d.label);}
function fmtLink(section,page){return\'#Styleguide/docs/\'+
(page?\'\':\'index_\')+section.replace(/[\\s\\,]+/g,\'-\').toLowerCase()+(page?\'_\'+page:\'\');}},})',
    ),
    'templates' => 
    array (
      'sg-headerpane' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
<h1>
    <div class="record-cell">
        <span class="module-title">{{{section.title}}}</span>
    </div>
    <div class="btn-toolbar pull-right">
        <span class="list-headerpane">
            <select name="sections" id="find_patterns" class="select2 search" data-placeholder="Search styleguide&hellip;">
                <option></option>
            </select>
        </span>
    </div>
</h1>
',
    ),
    'meta' => 
    array (
      'template_values' => 
      array (
        'last_updated' => '2013-05-06T22:47:00+00:00',
        'version' => '7.0.1',
      ),
      'page_data' => 
      array (
        'home' => 
        array (
          'title' => 'Styleguide',
          'description' => 'Major components of Styleguide.',
          'index' => false,
        ),
        'index' => 
        array (
          'title' => 'Core Elements',
          'description' => 'Simple and flexible HTML, CSS, and Javascript for popular user interface components and interactions.',
          'index' => false,
        ),
        'field' => 
        array (
          'title' => 'Example Sugar7 Fields',
          'description' => 'Basic fields that support detail, record, and edit modes with error addons.',
          'index' => false,
        ),
        'base' => 
        array (
          'title' => 'Base CSS',
          'description' => 'Basic HTML elements styled and enhanced with extensible classes for a fresh, consistent look and feel.',
          'index' => true,
          'pages' => 
          array (
            'typography' => 
            array (
              'label' => 'Typography',
              'description' => 'Headings, paragraphs, lists, and other inline type elements.',
            ),
            'grid' => 
            array (
              'label' => 'Grid system',
              'description' => 'A responsive 12-column grid including fixed- and fluid-width layouts based on that system.',
            ),
            'icons' => 
            array (
              'label' => 'Icons',
              'description' => 'Font Awesome icon library for scalable font based icons and glyphs for a full array of web-related actions.',
            ),
            'mixins' => 
            array (
              'label' => 'Mixins',
              'description' => 'Include or generate snippets of CSS with parameters.',
            ),
            'responsive' => 
            array (
              'label' => 'Responsive design',
              'description' => 'Media queries for various devices and resolutions.',
            ),
            'variables' => 
            array (
              'label' => 'Variables',
              'description' => 'LESS variables, HTML values, and usage guidelines.',
            ),
            'labels' => 
            array (
              'label' => 'Labels',
              'description' => 'Label and annotate text.',
            ),
            'edit' => 
            array (
              'label' => 'Edit Documentation',
              'description' => 'Instructions for updating Styleguide documentation.',
            ),
          ),
        ),
        'forms' => 
        array (
          'title' => 'Form Elements',
          'description' => 'Basic form elements and layouts for a consistent editing experience.',
          'index' => true,
          'pages' => 
          array (
            'fields' => 
            array (
              'label' => 'Sugar7 fields',
              'url' => '#Styleguide/field/all',
              'description' => 'Basic fields that support detail, record, and edit modes with error addons.',
            ),
            'buttons' => 
            array (
              'label' => 'Buttons',
              'description' => 'Standard css only button styles.',
            ),
            'editable' => 
            array (
              'label' => 'Editable',
              'description' => 'Inline form edit inputs.',
            ),
            'layouts' => 
            array (
              'label' => 'Form layouts',
              'description' => 'Customized layouts of field components.',
            ),
            'file' => 
            array (
              'label' => 'File uploader',
              'description' => 'Avatar file upload widget.',
            ),
            'datetime' => 
            array (
              'label' => 'Date-time picker',
              'description' => 'Lightweight date/time picker.',
            ),
            'select2' => 
            array (
              'label' => 'Select2',
              'description' => 'jQuery plugin replacement for select boxes. It supports searching, remote data sets, and infinite scrolling of results.',
            ),
            'jstree' => 
            array (
              'label' => 'jsTree',
              'description' => 'jQuery plugin cross browser tree component.',
            ),
            'range' => 
            array (
              'label' => 'Range Slider',
              'description' => 'jQuery plugin range picker.',
            ),
            'switch' => 
            array (
              'label' => 'Switch',
              'description' => 'jQuerty plugin turns check boxes into toggle switch.',
            ),
          ),
        ),
        'components' => 
        array (
          'title' => 'Components',
          'description' => 'Dozens of reusable components are built in to provide navigation, alerts, popovers, and much more.',
          'index' => true,
          'pages' => 
          array (
            'alerts' => 
            array (
              'label' => 'Alerts',
              'description' => 'Styles for success, warning, and error messages.',
            ),
            'collapse' => 
            array (
              'label' => 'Collapse',
              'description' => 'Get base styles and flexible support for collapsible components like accordions and navigation.',
            ),
            'dropdowns' => 
            array (
              'label' => 'Dropdowns',
              'description' => 'Add dropdown menus to nearly anything with this simple plugin. Features full dropdown menu support on in the navbar, tabs, and pills.',
            ),
            'popovers' => 
            array (
              'label' => 'Popovers',
              'description' => 'Add small overlays of content, like those on the iPad, to any element for housing secondary information.',
            ),
            'progress' => 
            array (
              'label' => 'Progress bars',
              'description' => 'For loading, redirecting, or action status.',
            ),
            'tooltips' => 
            array (
              'label' => 'Tooltips',
              'description' => 'A new take on the jQuery Tipsy plugin, Tooltips don\'t rely on images, uss CSS3 for animations, and data-attributes for local title storage.',
            ),
          ),
        ),
        'layouts' => 
        array (
          'title' => 'Layouts & Views',
          'description' => 'Modals, navbars, and other layout widgets.',
          'index' => true,
          'pages' => 
          array (
            'list' => 
            array (
              'label' => 'List Tables',
              'description' => 'For, you guessed it, tabular data.',
            ),
            'record' => 
            array (
              'label' => 'Record Views',
              'description' => 'Detail, edit and create views for records.',
            ),
            'drawer' => 
            array (
              'label' => 'Drawers',
              'description' => 'Drawer is a form of a modal that pushes main content down and expands from the top taking 100% of the screen width.',
            ),
            'navbar' => 
            array (
              'label' => 'Navbar',
              'description' => 'Top level navigation layout.',
            ),
            'tabs' => 
            array (
              'label' => 'Tab Navigation',
              'description' => 'Use this plugin to make tabs and pills more useful by allowing them to toggle through tabbable panes of local content.',
            ),
            'modals' => 
            array (
              'label' => 'Modals',
              'description' => 'A streamlined, but flexible, take on the traditional javascript modal plugin with only the minimum required functionality and smart defaults.',
            ),
            'wizard' => 
            array (
              'label' => 'Wizard',
              'description' => 'Wizard takes advantage of bootstrap modals and sets up a framework for taking a user through multiple steps to complete a task.',
            ),
          ),
        ),
        'charts' => 
        array (
          'title' => 'Charting',
          'description' => 'Standard and custom SVG charts for Sugar7 using the D3 library and the NVD3 framework.',
          'index' => true,
          'pages' => 
          array (
            'circular' => 
            array (
              'label' => 'Circular',
              'description' => 'Used for comparing parts to a whole.',
            ),
            'line' => 
            array (
              'label' => 'Line',
              'description' => 'Used for comparing data series.',
            ),
            'horizontal' => 
            array (
              'label' => 'Horizontal Bar',
              'description' => 'Used for comparing many values in a single series.',
            ),
            'vertical' => 
            array (
              'label' => 'Vertical Bar',
              'description' => 'Used for comparing multiple series with a few values.',
            ),
            'custom' => 
            array (
              'label' => 'Custom',
              'description' => 'Used for comparing values in a process.',
            ),
            'implementation' => 
            array (
              'label' => 'Implementation',
              'description' => 'Patterns for inserting and configuring charts.',
            ),
            'colors' => 
            array (
              'label' => 'Colors',
              'description' => 'Flexible methods for assigning color maps and fill methods to D3 charts.',
            ),
          ),
        ),
      ),
    ),
  ),
  'record' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'header' => true,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'picture',
              'type' => 'image',
              'width' => 42,
              'height' => 42,
              'dismiss_label' => true,
            ),
            1 => 
            array (
              'name' => 'full_name',
              'type' => 'fieldset-with-labels',
              'fields' => 
              array (
                0 => 'salutation',
                1 => 'first_name',
                2 => 'last_name',
              ),
            ),
            2 => 
            array (
              'type' => 'favorite',
              'readonly' => true,
            ),
            3 => 
            array (
              'type' => 'follow',
              'readonly' => true,
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'panel_body',
          'columns' => 2,
          'labelsOnTop' => true,
          'placeholders' => true,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'title',
              'label' => 'Base',
            ),
            1 => 
            array (
              'name' => 'do_not_call',
              'label' => 'bool',
            ),
            2 => 
            array (
              'name' => 'parent_name',
              'label' => 'Parent',
              'sortable' => false,
            ),
            3 => 
            array (
              'name' => 'email',
              'label' => 'email',
              'sortable' => false,
            ),
            4 => 
            array (
              'name' => 'assigned_user_name',
              'width' => '10%',
              'label' => 'Relate',
              'id' => 'ASSIGNED_USER_ID',
              'default' => true,
              'sortable' => false,
            ),
          ),
        ),
        2 => 
        array (
          'columns' => 2,
          'name' => 'panel_hidden',
          'hide' => true,
          'labelsOnTop' => true,
          'placeholders' => true,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'fieldset_address',
              'type' => 'fieldset',
              'css_class' => 'address',
              'label' => 'LBL_PRIMARY_ADDRESS',
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'primary_address_street',
                  'css_class' => 'address_street',
                  'placeholder' => 'LBL_PRIMARY_ADDRESS_STREET',
                ),
                1 => 
                array (
                  'name' => 'primary_address_city',
                  'css_class' => 'address_city',
                  'placeholder' => 'LBL_PRIMARY_ADDRESS_CITY',
                ),
                2 => 
                array (
                  'name' => 'primary_address_state',
                  'css_class' => 'address_state',
                  'placeholder' => 'LBL_PRIMARY_ADDRESS_STATE',
                ),
                3 => 
                array (
                  'name' => 'primary_address_postalcode',
                  'css_class' => 'address_zip',
                  'placeholder' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
                ),
                4 => 
                array (
                  'name' => 'primary_address_country',
                  'css_class' => 'address_country',
                  'placeholder' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
                ),
                5 => 
                array (
                  'name' => 'list_price',
                  'label' => 'currency',
                ),
              ),
            ),
            1 => 
            array (
              'name' => 'fieldset_alt_address',
              'type' => 'fieldset',
              'css_class' => 'address',
              'label' => 'LBL_ALT_ADDRESS',
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'alt_address_street',
                  'css_class' => 'address_street',
                  'placeholder' => 'LBL_ALT_ADDRESS_STREET',
                ),
                1 => 
                array (
                  'name' => 'alt_address_city',
                  'css_class' => 'address_city',
                  'placeholder' => 'LBL_ALT_ADDRESS_CITY',
                ),
                2 => 
                array (
                  'name' => 'alt_address_state',
                  'css_class' => 'address_state',
                  'placeholder' => 'LBL_ALT_ADDRESS_STATE',
                ),
                3 => 
                array (
                  'name' => 'alt_address_postalcode',
                  'css_class' => 'address_zip',
                  'placeholder' => 'LBL_ALT_ADDRESS_POSTALCODE',
                ),
                4 => 
                array (
                  'name' => 'alt_address_country',
                  'css_class' => 'address_country',
                  'placeholder' => 'LBL_ALT_ADDRESS_COUNTRY',
                ),
                5 => 
                array (
                  'name' => 'copy',
                  'label' => 'NTC_COPY_PRIMARY_ADDRESS',
                  'type' => 'copy',
                  'mapping' => 
                  array (
                    'primary_address_street' => 'alt_address_street',
                    'primary_address_city' => 'alt_address_city',
                    'primary_address_state' => 'alt_address_state',
                    'primary_address_postalcode' => 'alt_address_postalcode',
                    'primary_address_country' => 'alt_address_country',
                  ),
                ),
              ),
            ),
            2 => 
            array (
              'name' => 'date_modified_by',
              'readonly' => true,
              'type' => 'fieldset',
              'label' => 'LBL_DATE_MODIFIED',
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'date_modified',
                ),
                1 => 
                array (
                  'type' => 'label',
                  'default_value' => 'LBL_BY',
                ),
                2 => 
                array (
                  'name' => 'modified_by_name',
                ),
              ),
            ),
            3 => 
            array (
              'name' => 'team_name',
              'label' => 'Teamset',
              'type' => 'teamset',
              'module' => 'Teams',
            ),
            4 => 
            array (
              'name' => 'date_entered_by',
              'readonly' => true,
              'type' => 'fieldset',
              'label' => 'LBL_DATE_ENTERED',
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'date_entered',
                ),
                1 => 
                array (
                  'type' => 'label',
                  'default_value' => 'LBL_BY',
                ),
                2 => 
                array (
                  'name' => 'created_by_name',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'field' => 
  array (
    'templates' => 
    array (
      'date' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
<div class="page-header">
    <h1>Date Field <small>driven by jQuery datetime picker plugin</small></h1>
</div>
<div class="description">
    <p>See the <a href="#Styleguide/docs/forms.datetime">documentation page</a> for implementation details for the date and datetimecombo fields.</p>
</div>
',
      'field' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
{{#useTable}}
<div class="page-header">
    <p class="lead">{{{section.description}}}</p>
</div>
{{/useTable}}
{{#unless useTable}}
    {{{description}}}
{{/unless}}

<div class="record">
    {{#useTable}}
    <table class="accordion table table-bordered table-striped table-condensed" id="accordion_fields">
        <thead>
            <tr>
                <th>Sugar Field</th><th>Field Name</th><th>Complexity</th><th>Example</th><th>Documentation</th>
            </tr>
        </thead>
    {{/useTable}}
    {{#each tempfields}}
        {{#if ../useTable}}
        <tbody class="accordion-group">
            <tr class="accordion-heading">
                <td>{{this.type}}</td>
                <td>{{this.name}}</td>
                <td>plugin</td>
                <td>
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion_fields" data-target="#collapse_field_{{this.type}}">Example</a>
                </td>
                <td><a href="#Styleguide/field/{{this.type}}">Documentation</a></td>
            </tr>
            <tr>
                <td class="accordion-body collapse" colspan="5">
                    <div class="accordion-inner" id="collapse_field_{{this.type}}" style="height:0px;">
        {{/if}}
                        <div class="row-fluid">
                            <h3>Detail</h3>
                            {{field ../this model=../this.model template="detail"}}
                        </div>
                        <div class="row-fluid">
                            <h3>Edit</h3>
                            {{field ../this model=../this.model template="edit"}}
                            {{#each this.errorMeta}}
                                {{field ../../this model=../../this.model template="error"}}
                            {{/each}}
                        </div>
                        <div class="row-fluid">
                            <h3>Disabled</h3>
                            {{field ../this model=../this.model template="disabled"}}
                        </div>
                        <div class="row-fluid">
                            <h3>List</h3>
                            {{field ../this model=../this.model template="list"}}
                        </div>
        {{#if ../useTable}}
                    </div>
                </td>
            </tr>
        </tbody>
        {{/if}}
    {{/each}}
    {{#useTable}}
    </table>
    {{/useTable}}
</div>
',
      'email' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
<div class="page-header">
    <h1>Email Field <small>multi state text input with properties</small></h1>
</div>
<div class="description">
    <p>This is the email field implementation details.</p>
</div>
',
    ),
    'meta' => 
    array (
      'template_values' => 
      array (
        'email' => 
        array (
          0 => 
          array (
            'email_address' => 'kid.phone.sugar@example.info',
            'primary_address' => '0',
            'opt_out' => '0',
            'invalid_email' => '0',
          ),
          1 => 
          array (
            'email_address' => 'kid.phone.sugar@example.info',
            'primary_address' => '1',
            'opt_out' => '0',
            'invalid_email' => '0',
          ),
          2 => 
          array (
            'email_address' => 'kid.phone.sugar@example.info',
            'primary_address' => '0',
            'opt_out' => '1',
            'invalid_email' => '0',
          ),
          3 => 
          array (
            'email_address' => 'kid.phone.sugar@example.info',
            'primary_address' => '0',
            'opt_out' => '0',
            'invalid_email' => '1',
          ),
        ),
        'datetimecombo' => '2013-05-06T22:47:00+00:00',
        'date' => '2013-05-06T22:47:00+00:00',
        'currency' => 
        array (
          'list_price' => 12345.7,
          'currency_id' => -99,
          'list_price_ERROR' => 'xyc',
        ),
        'bool' => 
        array (
          'do_not_call' => 1,
          'do_not_call_ERROR' => 0,
        ),
        'text' => 
        array (
          'description' => 'This is a description of the styleguide module.',
          'description_ERROR' => 'This description is too long.',
        ),
      ),
    ),
    'controller' => 
    array (
      'base' => '/*********************************************************************************
     * By installing or using this file, you are confirming on behalf of the entity
     * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
     * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
     * http://www.sugarcrm.com/master-subscription-agreement
     *
     * If Company is not bound by the MSA, then by installing or using this file
     * you are agreeing unconditionally that Company will be bound by the MSA and
     * certifying that you have authority to bind Company accordingly.
     *
     * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
     ********************************************************************************/
({className:\'container-fluid\',section:{},parent_link:\'\',useTable:true,tempfields:[],errorfields:[],_render:function(){this.section.title=\'Form Elements\';this.section.description=\'Basic fields that support detail, record, and edit modes with error addons.\';var self=this,fieldTypeReq=this.context.get(\'field_type\'),fieldTypes=(fieldTypeReq===\'all\'?[\'text\',\'bool\',\'email\',\'date\',\'currency\']:[fieldTypeReq]),errors={required:true,\'This is an error message.\':{}},errorMeta={},fieldMeta={};this.useTable=(fieldTypeReq===\'all\'?true:false);this.parent_link=(fieldTypeReq===\'all\'?\'docs/index.forms\':\'field/all\');this.tempfields=[];this.errorfields=[];_.each(fieldTypes,function(fieldType){fieldMeta=_.find(self.model.fields,function(field){if(field.type===\'datetime\'&&fieldType.indexOf(\'date\')===0){field.type=fieldType;}
return field.type==fieldType;},self);if(fieldMeta){if(_.isObject(self.meta[\'template_values\'][fieldType])&&!_.isArray(self.meta[\'template_values\'][fieldType])){_.each(self.meta[\'template_values\'][fieldType],function(value,name){self.model.set(name,value);},self);}else{self.model.set(fieldMeta.name,self.meta[\'template_values\'][fieldType]);}
errorMeta=app.utils.deepCopy(fieldMeta);errorMeta.name=fieldMeta.name+\'_ERROR\';fieldMeta.errorMeta=[];fieldMeta.errorMeta.push(errorMeta);self.tempfields.push(fieldMeta);}});if(fieldTypeReq!==\'all\'){this.title=fieldTypeReq+\' field\';var descTpl=app.template.getView(\'styleguide.\'+fieldTypeReq,\'Styleguide\');if(descTpl){this.description=descTpl();}}
app.view.View.prototype._render.call(this);_.each(this.fields,function(field){if(field.tplName===\'edit\'){field.setMode(\'edit\');}
if(field.tplName===\'disabled\'){field.setDisabled(true);field.setMode(\'edit\');}
if(field.tplName===\'error\'){field.setMode(\'edit\');self.model.trigger(\'error:validation:\'+field.name,errors);}},this);}})',
    ),
  ),
  'list' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'full_name',
              'type' => 'fullname',
              'fields' => 
              array (
                0 => 'salutation',
                1 => 'first_name',
                2 => 'last_name',
              ),
              'link' => true,
              'css_class' => 'full-name',
              'width' => 49,
              'label' => 'fullname',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'title',
              'label' => 'base',
            ),
            2 => 
            array (
              'name' => 'do_not_call',
              'label' => 'bool',
            ),
            3 => 
            array (
              'name' => 'parent_name',
              'label' => 'parent',
              'sortable' => false,
            ),
            4 => 
            array (
              'name' => 'email',
              'label' => 'email',
              'sortable' => false,
            ),
            5 => 
            array (
              'name' => 'assigned_user_name',
              'width' => '10%',
              'label' => 'relate',
              'id' => 'ASSIGNED_USER_ID',
              'default' => true,
              'sortable' => false,
            ),
            6 => 
            array (
              'name' => 'filename',
              'label' => 'file',
            ),
            7 => 
            array (
              'name' => 'list_price',
              'label' => 'currency',
            ),
            8 => 
            array (
              'name' => 'date_entered',
              'label' => 'datetimecombo',
              'sortable' => false,
            ),
          ),
        ),
      ),
    ),
  ),
  'docs' => 
  array (
    'templates' => 
    array (
      'docs' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
{{#section_page}}
<section id="index">
<div class="page-header">
    <p class="lead">{{{section.description}}}</p>
</div>
{{/section_page}}

{{{content}}}

{{#section_page}}
</section>
{{/section_page}}
',
    ),
    'controller' => 
    array (
      'base' => '/*********************************************************************************
     * By installing or using this file, you are confirming on behalf of the entity
     * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
     * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
     * http://www.sugarcrm.com/master-subscription-agreement
     *
     * If Company is not bound by the MSA, then by installing or using this file
     * you are agreeing unconditionally that Company will be bound by the MSA and
     * certifying that you have authority to bind Company accordingly.
     *
     * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
     ********************************************************************************/
({className:\'container-fluid\',pageData:{},section:{},page:{},section_page:false,parent_link:\'\',file:\'\',keys:[],initialize:function(options){var self=this,keys=[];app.view.View.prototype.initialize.call(this,options);this.pageData=app.metadata.getView(\'Styleguide\',\'sg-headerpane\').page_data;this.file=this.context.get(\'page_name\');if(this.file&&this.file!==\'\'){keys=this.file.split(\'_\');}
this.keys=keys;if(keys.length){if(keys[0]===\'index\'){if(keys.length>1){this.section=this.pageData[keys[1]];}else{this.section=this.pageData[keys[0]];}
this.section_page=true;this.file=\'index\';}else if(keys.length>1){this.section=this.pageData[keys[0]];this.page=this.section.pages[keys[1]];this.parent_link=\'_\'+keys[0];}else{this.section=this.pageData[keys[0]];}}
var initFn=this[\'init_\'+keys[1]];if(initFn){initFn(this.pageData);}},_render:function(){var self=this,$find;var pageContent=app.template.getView(\'content.\'+this.file,\'Styleguide\');if(pageContent){this.content=pageContent(self);}
app.view.View.prototype._render.call(this);if(this.keys[0]===\'index\'){this.render_index(this.keys[1]);}else{var renderFn=this[\'render_\'+this.keys[1]];if(renderFn){renderFn(self);}
window.prettyPrint&&prettyPrint();}},init_labels:function(pageData){pageData.module_list=[];if(app.metadata.getModuleNames(true,\'read\')){_.each(app.metadata.getModuleNames(true,\'read\'),function(val){if([\'Home\'].indexOf(val)===-1){pageData.module_list.push(val);}});}
pageData.module_list.sort();},render_jstree:function(view){view.$(\'#people\').jstree({"json_data":{"data":[{"data":"Sabra Khan","state":"open","metadata":{id:1},"children":[{"data":"Mark Gibson","metadata":{id:2}},{"data":"James Joplin","metadata":{id:3}},{"data":"Terrence Li","metadata":{id:4}},{"data":"Amy McCray","metadata":{id:5},"children":[{"data":"Troy McClure","metadata":{id:6}},{"data":"James Kirk","metadata":{id:7}}]}]}]},"plugins":["json_data","ui","types"]}).bind(\'loaded.jstree\',function(){view.$(\'#people\').addClass(\'jstree-sugar\');view.$(\'#people > ul\').addClass(\'list\');view.$(\'#people > ul > li > a\').addClass(\'jstree-clicked\');}).bind(\'select_node.jstree\',function(e,data){data.inst.toggle_node(data.rslt.obj);});},render_editable:function(view){view.$(\'.url-editable-trigger\').on(\'click.styleguide\',function(){var uefield=$(this).next();uefield.html(uefield.text()).editable(function(value,settings){var nvprep=\'<a href="\'+value+\'">\',nvapp=\'</a>\',value=nvprep.concat(value);return(value);},{onblur:\'submit\'}).trigger(\'click.styleguide\');});view.$(\'.text-editable-trigger\').on(\'click.styleguide\',function(){var uefield=$(this).next();uefield.html(uefield.text()).editable().trigger(\'click.styleguide\');});view.$(\'.urleditable-field > a\').each(function(){if(isEllipsis($(this))===true){$(this).attr({\'data-original-title\':$(this).text(),\'rel\':\'tooltip\',\'class\':\'longUrl\'});}});function isEllipsis(e){return(e[0].offsetWidth<e[0].scrollWidth);}
view.$(\'.longUrl[rel=tooltip]\').tooltip({placement:\'top\'});},render_switch:function(view){view.$(\'#mySwitch\').on(\'switch-change\',function(e,data){var $el=$(data.el),value=data.value;});},render_datetime:function(view){view.model.start_date=\'2000-01-01T22:47:00+00:00\';var fieldSettingsDate={view:view,def:{name:\'start_date\',type:\'date\',view:\'edit\',enabled:true},viewName:\'edit\',context:view.context,module:view.module,model:view.model,meta:app.metadata.getField(\'date\')},dateField=app.view.createField(fieldSettingsDate);view.$(\'#sugar7_date\').append(dateField.el);dateField.render();view.model.start_datetime=\'2000-01-01T22:47:00+00:00\';var fieldSettingsCombo={view:view,def:{name:\'start_datetime\',type:\'datetimecombo\',view:\'edit\',enabled:true},viewName:\'edit\',context:view.context,module:view.module,model:view.model,meta:app.metadata.getField(\'datetimecombo\')},datetimecomboField=app.view.createField(fieldSettingsCombo);view.$(\'#sugar7_datetimecombo\').append(datetimecomboField.el);datetimecomboField.render();view.$(\'#dp1\').datepicker();view.$(\'#tp1\').timepicker();view.$(\'#dp2\').datepicker({format:\'mm-dd-yyyy\'});view.$(\'#tp2\').timepicker({timeFormat:\'H.i.s\'});view.$(\'#dp3\').datepicker();var startDate=new Date(2012,1,20);var endDate=new Date(2012,1,25);view.$(\'#dp4\').datepicker().on(\'changeDate\',function(ev){if(ev.date.valueOf()>endDate.valueOf()){view.$(\'#alert\').show().find(\'strong\').text(\'The start date can not be greater then the end date\');}else{view.$(\'#alert\').hide();startDate=new Date(ev.date);view.$(\'#startDate\').text(view.$(\'#dp4\').data(\'date\'));}
view.$(\'#dp4\').datepicker(\'hide\');});view.$(\'#dp5\').datepicker().on(\'changeDate\',function(ev){if(ev.date.valueOf()<startDate.valueOf()){view.$(\'#alert\').show().find(\'strong\').text(\'The end date can not be less then the start date\');}else{view.$(\'#alert\').hide();endDate=new Date(ev.date);view.$(\'#endDate\').text(view.$(\'#dp5\').data(\'date\'));}
view.$(\'#dp5\').datepicker(\'hide\');});view.$(\'#tp3\').timepicker({\'scrollDefaultNow\':true});view.$(\'#tp4\').timepicker();view.$(\'#tp4_button\').on(\'click\',function(){view.$(\'#tp4\').timepicker(\'setTime\',new Date());});view.$(\'#tp5\').timepicker({\'minTime\':\'2:00pm\',\'maxTime\':\'6:00pm\',\'showDuration\':true});view.$(\'#tp6\').timepicker();view.$(\'#tp6\').on(\'changeTime\',function(){view.$(\'#tp6_legend\').text(\'You selected: \'+$(this).val());});view.$(\'#tp7\').timepicker({\'step\':5});},render_modals:function(view){view.$(\'[rel=popover]\').popover();view.$(\'.modal\').tooltip({selector:\'[rel=tooltip]\'});view.$(\'#dp1\').datepicker({format:\'mm-dd-yyyy\'});view.$(\'#dp3\').datepicker();view.$(\'#tp1\').timepicker();},render_wizard:function(view){view.$(\'#launch_simple_wizard\').on(\'click.styleguide\',function(e){wizard.init({id:\'wizardSimpleDemo\',modalUrl:\'styleguide/content/wizard-modal.html\',className:\'setup\',headerText:\'Simple Wizard Demo\',navMenu:new Array(\'Screen Two\',\'Screen Screen Three\',\'Screen Four\')});e.stopPropagation();e.preventDefault();});view.$(\'#launch_wizard\').on(\'click.styleguide\',function(e){wizard.init({id:\'wizardDemo\',modalUrl:\'styleguide/content/wizard-modal.html\',className:\'setup\',headerText:\'Custom Wizard Demo\',navMenu:new Array(\'Screen Two\',\'Screen Screen Three\',\'Screen Four\'),\'onWizardStart\':function(){view.$(\'#wizardDemo .start\').live(\'click\',function(){view.$(\'#wizardDemo .manual\').css(\'display\',\'none\');});},defaults:{startText:\'Setup Wizard\',\'footer\':function(){return\'<div class="modal-footer">\'+\'<a href="#" class="btn btn-invisible btn-link pull-left cancel">\'+this.cancelText+\'</a>\'+\'<a class="btn back" href="#">\'+this.backText+\'</a>\'+\'<a class="btn btn-primary next" href="#">\'+this.nextText+\'</a>\'+\'<a class="btn btn-primary finish" href="#">\'+this.finishText+\'</a>\'+\'<a href="#" class="btn manual">Manual Setup</a>\'+\'<a class="btn btn-primary start" href="#">\'+this.startText+\'</a>\'+\'</div>\';}}});e.stopPropagation();e.preventDefault();});},render_tooltips:function(view){$(\'body\').tooltip({selector:\'[rel=tooltip]\'});},render_dropdowns:function(view){view.$(\'#mm001demo *\').on(\'click.styleguide\',function(){return false;});view.$(\'*\').on(\'click.styleguide\',function(){setTimeout(function(){view.$(\'#mm001demo\').find(\'li.open .btn-group\').addClass(\'open\');},0.1);});},render_popovers:function(view){view.$(\'[rel=popover]\').popover();view.$(\'[rel=popoverHover]\').popover({trigger:\'hover\'});view.$(\'[rel=popoverTop]\').popover({placement:\'top\'});view.$(\'[rel=popoverBottom]\').popover({placement:\'bottom\'});},render_alerts:function(view){$(document).keyup(function(e){if(e.keyCode===27){view.$(\'.alert-top .timeten\').hide();view.$(\'.alert-confirm\').modal(\'hide\');}});setTimeout(function(){view.$(\'.timeten\').fadeOut().remove();},9000);view.$(\'.alert-confirm\').on(\'show.styleguide\',function(){var modal=$(this);modal.find(\'a.close\').off(\'click\').on(\'click\',function(e){modal.modal(\'hide\');});modal.find(\'a.leave\').off(\'click\').on(\'click\',function(e){modal.modal(\'hide\');});modal.find(\'a.return\').off(\'click\').on(\'click\',function(e){modal.modal(\'hide\');});}).modal({\'backdrop\':\'static\',\'show\':false});view.$(\'a\').on(\'click.styleguide\',function(e){e.preventDefault();e.stopPropagation();view.$(\'.alert-confirm\').modal(\'show\');view.$(\'.alert-confirm a.leave\').attr(\'href\',e.target.href);});},render_drawer:function(view){view.$(\'#sg_open_drawer\').on(\'click.styleguide\',function(){app.drawer.open({layout:\'create\',context:{create:true,model:app.data.createBean(\'Styleguide\')}});});},render_tabs:function(view){view.$(\'#nav-tabs-pills\').find(\'ul.nav-tabs > li > a, ul.nav-list > li > a, ul.nav-pills > li > a\').on(\'click.styleguide\',function(e){e.preventDefault();e.stopPropagation();$(this).tab(\'show\');});},render_inputs:function(view){view.$(\'.error input, .error textarea\').on(\'focus.styleguide\',function(){$(this).next().tooltip(\'show\');});view.$(\'.error input, .error textarea\').on(\'blur.styleguide\',function(){$(this).next().tooltip(\'hide\');});view.$(\'.add-on\').tooltip({trigger:\'click\',container:\'body\'});},render_range:function(view){var fieldSettings={view:view,def:{name:\'include\',type:\'range\',view:\'edit\',sliderType:\'connected\',minRange:0,maxRange:100,\'default\':true,enabled:true},viewName:\'edit\',context:view.context,module:view.module,model:view.model,meta:app.metadata.getField(\'range\')},rangeField=app.view.createField(fieldSettings);view.$(\'#test_slider\').append(rangeField.el);rangeField.render();rangeField.sliderDoneDelegate=function(minField,maxField){return function(value){minField.val(value.min);maxField.val(value.max);};}(view.$(\'#test_slider_min\'),view.$(\'#test_slider_max\'));},render_index:function(section){var self=this,i=0,m=\'\',l=0;if(!section){$.each(this.pageData,function(kS,vS){if(!vS.index)return;m+=(i%3===0?\'<div class="row-fluid">\':\'\');m+=\'<div class="span4"><h3>\'+\'<a class="section-link" href="\'+
(vS.url?vS.url:fmtLink(kS))+\'">\'+
vS.title+\'</a></h3><p>\'+vS.description+\'</p><ul>\';if(vS.pages){$.each(vS.pages,function(kP,vP){m+=\'<li ><a class="section-link" href="\'+
(vP.url?vP.url:fmtLink(kS,kP))+\'">\'+
vP.label+\'</a></li>\';});}
m+=\'</ul></div>\';m+=(i%3===2?\'</div>\':\'\');i+=1;});}else{$.each(this.pageData[section].pages,function(kP,vP){m+=(i%4===0?\'<div class="row-fluid">\':\'\');m+=\'<div class="span3"><h3>\'+
(!vP.items?(\'<a class="section-link" href="\'+(vP.url?vP.url:fmtLink(section,kP))+\'">\'+vP.label+\'</a>\'):vP.label)+\'</h3><p>\'+vP.description;m+=\'</p></div>\';m+=(i%4===3?\'</div>\':\'\');i+=1;});}
$(\'#index-content\').append(\'<section id="section-menu"></section>\').html(m);function fmtLink(section,page){return\'#Styleguide/docs/\'+
(page?\'\':\'index_\')+section.replace(/[\\s\\,]+/g,\'-\').toLowerCase()+(page?\'_\'+page:\'\');}
(function($){jQuery.expr[\':\'].Contains=function(a,i,m){return(a.textContent||a.innerText||\'\').toUpperCase().indexOf(m[3].toUpperCase())>=0;};function filterList($input,$list){$input.on(\'change.styleguide\',function(){var filter=$(this).val();if(filter)
{$list.find(\'p\').hide();var $matches=$list.find(\'ul\').find(\'a:Contains(\'+filter+\')\').parent();$(\'li\',$list).not($matches).slideUp();$matches.slideDown();}
else
{$list.find(\'p\').show();$list.find(\'li\').slideDown();}
return false;}).on(\'keyup.styleguide\',function(){$(this).change();});}
$(function(){filterList($(\'.filterinput\'),$(\'#index-content\'));});}(jQuery));}})',
    ),
  ),
  'headerpane' => 
  array (
    'meta' => 
    array (
      'buttons' => 
      array (
        0 => 
        array (
          'name' => 'create_button',
          'type' => 'button',
          'label' => 'LBL_CREATE_BUTTON_LABEL',
          'css_class' => 'btn-primary',
          'acl_action' => 'create',
          'route' => 
          array (
            'action' => 'create',
          ),
        ),
        1 => 
        array (
          'name' => 'import_vcard_button',
          'type' => 'button',
          'label' => 'LBL_IMPORT_VCARD',
          'css_class' => 'btn-primary',
          'acl_action' => 'import',
          'events' => 
          array (
            'click' => 'function(e){
                    app.drawer.open({
                            layout : "vcard-import",
                            context: {
                                create: true
                            }
                        });
                    }',
          ),
        ),
        2 => 
        array (
          'name' => 'sidebar_toggle',
          'type' => 'sidebartoggle',
        ),
      ),
    ),
  ),
  'twitter' => 
  array (
    'meta' => 
    array (
      'dashlets' => 
      array (
        0 => 
        array (
          'name' => 'LBL_TWITTER_NAME',
          'description' => 'LBL_TWITTER_DESCRIPTION',
          'config' => 
          array (
            'limit' => '20',
          ),
          'preview' => 
          array (
            'title' => 'LBL_TWITTER_MY_ACCOUNT',
            'twitter' => 'sugarcrm',
            'limit' => '3',
          ),
        ),
      ),
      'config' => 
      array (
        'fields' => 
        array (
          0 => 
          array (
            'name' => 'limit',
            'label' => 'LBL_TWITTER_DISPLAY_ROWS',
            'type' => 'enum',
            'options' => 
            array (
              5 => 5,
              10 => 10,
              15 => 15,
              20 => 20,
              50 => 50,
            ),
          ),
        ),
      ),
    ),
  ),
  'subpanel-list' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'full_name',
              'type' => 'fieldset',
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'first_name',
                  'link' => true,
                ),
                1 => 
                array (
                  'name' => 'last_name',
                  'link' => true,
                ),
              ),
              'css_class' => 'full-name',
              'width' => 49,
              'label' => 'LBL_LIST_NAME',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
            ),
            1 => 
            array (
              'name' => 'email',
              'label' => 'LBL_LIST_EMAIL',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
            ),
            2 => 
            array (
              'name' => 'phone_work',
              'label' => 'LBL_LIST_PHONE',
              'enabled' => true,
              'default' => true,
            ),
          ),
        ),
      ),
    ),
  ),
  'massupdate' => 
  array (
    'meta' => 
    array (
      'buttons' => 
      array (
        0 => 
        array (
          'name' => 'update_button',
          'type' => 'button',
          'label' => 'Update',
          'acl_action' => 'massupdate',
          'css_class' => 'btn-primary',
          'primary' => true,
        ),
        1 => 
        array (
          'type' => 'button',
          'value' => 'cancel',
          'css_class' => 'btn-invisible cancel_button',
          'icon' => 'icon-remove',
          'primary' => false,
        ),
      ),
      'panels' => 
      array (
        0 => 
        array (
          'fields' => 
          array (
          ),
        ),
      ),
    ),
  ),
  '_hash' => '4beac9c70912e32462f1b135dc2a0ad1',
);

