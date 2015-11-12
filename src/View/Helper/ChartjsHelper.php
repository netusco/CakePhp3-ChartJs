<?php
/**
 * ChartjsHelper file
 *
 * Licensed under the MIT License
 * Copyright (c) 2015 Ernest Conill
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * @author https://github.com/netusco
 * @link https://github.com/netusco/cakephp-chartjs-helper
 * @license http://opensource.org/licenses/MIT
 */
namespace ChartJs\View\Helper;

use Cake\View\Helper;

class ChartjsHelper extends Helper
{
    /**
    * Default configuration.
    *
    * @var array
    **/
    protected $_defaultConfig = [
        'Chart' => [
            'type' => 'line',
            'id' => 'myChart',
        ],
        'Canvas' => [
            'class' => 'myChartJs',
            'width' => 600,
            'height' => 400,
            'zindex' => 10,
            'position' => 'relative',
            'css' => null,
            'wrapper' => true,
            'wrapperClass' => 'chartCanvasWrapper',
        ],
        'Options' => [
            // Boolean - Whether to animate the chart
            'animation' => true,

            // Number - Number of animation steps
            'animationSteps' => 60,

            // String - Animation easing effect
            'animationEasing' => "easeOutQuart",

            // Boolean - If we should show the scale at all
            'showScale' => true,

            // Boolean - If we want to override with a hard coded scale
            'scaleOverride' => false,

            // ** Required if scaleOverride is true **
            // Number - The number of steps in a hard coded scale
            'scaleSteps' => null,

            // Number - The value jump in the hard coded scale
            'scaleStepWidth' => null,

            // Number - The scale starting value
            'scaleStartValue' => null,

            // String - Colour of the scale line
            'scaleLineColor' => "rgba(0,0,0,.1)",

            // Number - Pixel width of the scale line
            'scaleLineWidth' => 1,

            // Boolean - Whether to show labels on the scale
            'scaleShowLabels' => true,

            // Interpolated JS string - can access value
            'scaleLabel' => "<%=value%>",

            // Boolean - Whether the scale should stick to integers, not floats even if drawing space is there
            'scaleIntegersOnly' => true,

            // Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
            'scaleBeginAtZero' => false,

            // String - Scale label font declaration for the scale label
            'scaleFontFamily' => '"Helvetica Neue", "Helvetica", "Arial", "sans-serif"',

            // Number - Scale label font size in pixels
            'scaleFontSize' => 12,

            // String - Scale label font weight style
            'scaleFontStyle' => "normal",

            // String - Scale label font colour
            'scaleFontColor' => "#666",

            // Boolean - whether or not the chart should be responsive and resize when the browser does. (only with canvas absolute)
            'responsive' => false,

            // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
            'maintainAspectRatio' => true,

            // Boolean - Determines whether to draw tooltips on the canvas or not
            'showTooltips' => true,

            // Function - Determines whether to execute the customTooltips function instead of drawing the built in tooltips (See [Advanced - External Tooltips](#advanced-usage-custom-tooltips))
            'customTooltips' => false,

            // Array - Array of string names to attach tooltip events
            'tooltipEvents' => ["mousemove", "touchstart", "touchmove"],

            // String - Tooltip background colour
            'tooltipFillColor' => "rgba(0,0,0,0.8)",

            // String - Tooltip label font declaration for the scale label
            'tooltipFontFamily' => '"Helvetica Neue", "Helvetica", "Arial", "sans-serif"',

            // Number - Tooltip label font size in pixels
            'tooltipFontSize' => 14,

            // String - Tooltip font weight style
            'tooltipFontStyle' => "normal",

            // String - Tooltip label font colour
            'tooltipFontColor' => "#fff",

            // String - Tooltip title font declaration for the scale label
            'tooltipTitleFontFamily' => '"Helvetica Neue", "Helvetica", "Arial", "sans-serif"',

            // Number - Tooltip title font size in pixels
            'tooltipTitleFontSize' => 14,

            // String - Tooltip title font weight style
            'tooltipTitleFontStyle' => "bold",

            // String - Tooltip title font colour
            'tooltipTitleFontColor' => "#fff",

            // Number - pixel width of padding around tooltip text
            'tooltipYPadding' => 6,

            // Number - pixel width of padding around tooltip text
            'tooltipXPadding' => 6,

            // Number - Size of the caret on the tooltip
            'tooltipCaretSize' => 8,

            // Number - Pixel radius of the tooltip border
            'tooltipCornerRadius' => 6,

            // Number - Pixel offset from point x to tooltip edge
            'tooltipXOffset' => 10,

            // String - Template string for single tooltips
            'tooltipTemplate' => "<%if (label){%><%=label%>: <%}%><%= value %>",

            // String - Template string for multiple tooltips
            'multiTooltipTemplate' => "<%= value %>",

            // Function - Will fire on animation progression.
            'onAnimationProgress' => 'function(){}',

            // Function - Will fire on animation completion.
            'onAnimationComplete' => 'function(){}',


            // SPECIFIC OPTIONS
            // LINE CHART
            'Line' => [ 
                //Boolean - Whether grid lines are shown across the chart
                'scaleShowGridLines' => true,

                //String - Colour of the grid lines
                'scaleGridLineColor' => "rgba(0,0,0,.05)",

                //Number - Width of the grid lines
                'scaleGridLineWidth' => 1,

                //Boolean - Whether to show horizontal lines (except X axis)
                'scaleShowHorizontalLines' => true,

                //Boolean - Whether to show vertical lines (except Y axis)
                'scaleShowVerticalLines' => true,

                //Boolean - Whether the line is curved between points
                'bezierCurve' => true,

                //Number - Tension of the bezier curve between points
                'bezierCurveTension' => 0.4,

                //Boolean - Whether to show a dot for each point
                'pointDot' => true,

                //Number - Radius of each point dot in pixels
                'pointDotRadius' => 4,

                //Number - Pixel width of point dot stroke
                'pointDotStrokeWidth' => 1,

                //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
                'pointHitDetectionRadius' => 20,

                //Boolean - Whether to show a stroke for datasets
                'datasetStroke' => true,

                //Number - Pixel width of dataset stroke
                'datasetStrokeWidth' => 2,

                //Boolean - Whether to fill the dataset with a colour
                'datasetFill' => true,

                //String - A legend template
                'legendTemplate' => '<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
            ],

            // BAR CHART
            'Bar' => [ 
                //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
                'scaleBeginAtZero' => true,

                //Boolean - Whether grid lines are shown across the chart
                'scaleShowGridLines' => true,

                //String - Colour of the grid lines
                'scaleGridLineColor' => "rgba(0,0,0,.05)",

                //Number - Width of the grid lines
                'scaleGridLineWidth' => 1,

                //Boolean - Whether to show horizontal lines (except X axis)
                'scaleShowHorizontalLines' => true,

                //Boolean - Whether to show vertical lines (except Y axis)
                'scaleShowVerticalLines' => true,

                //Boolean - If there is a stroke on each bar
                'barShowStroke' => true,

                //Number - Pixel width of the bar stroke
                'barStrokeWidth' => 2,

                //Number - Spacing between each of the X value sets
                'barValueSpacing' => 5,

                //Number - Spacing between data sets within X values
                'barDatasetSpacing' => 1,

                //String - A legend template
                'legendTemplate' => '<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
            ],

            // RADAR CHART
            'Radar' => [
                //Boolean - Whether to show lines for each scale point
                'scaleShowLine' => true,

                //Boolean - Whether we show the angle lines out of the radar
                'angleShowLineOut' => true,

                //Boolean - Whether to show labels on the scale
                'scaleShowLabels' => false,

                // Boolean - Whether the scale should begin at zero
                'scaleBeginAtZero' => true,

                //String - Colour of the angle line
                'angleLineColor' => "rgba(0,0,0,.1)",

                //Number - Pixel width of the angle line
                'angleLineWidth' => 1,

                //String - Point label font declaration
                'pointLabelFontFamily' => "'Arial'",

                //String - Point label font weight
                'pointLabelFontStyle' => "normal",

                //Number - Point label font size in pixels
                'pointLabelFontSize' => 10,

                //String - Point label font colour
                'pointLabelFontColor' => "#666",

                //Boolean - Whether to show a dot for each point
                'pointDot' => true,

                //Number - Radius of each point dot in pixels
                'pointDotRadius' => 3,

                //Number - Pixel width of point dot stroke
                'pointDotStrokeWidth' => 1,

                //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
                'pointHitDetectionRadius' => 20,

                //Boolean - Whether to show a stroke for datasets
                'datasetStroke' => true,

                //Number - Pixel width of dataset stroke
                'datasetStrokeWidth' => 2,

                //Boolean - Whether to fill the dataset with a colour
                'datasetFill' => true,

                //String - A legend template
                'legendTemplate' => '<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
            ],

            // POLAR CHART
            'Polar' => [
                //Boolean - Show a backdrop to the scale label
                'scaleShowLabelBackdrop' => true,

                //String - The colour of the label backdrop
                'scaleBackdropColor' => "rgba(255,255,255,0.75)",

                // Boolean - Whether the scale should begin at zero
                'scaleBeginAtZero' => true,

                //Number - The backdrop padding above & below the label in pixels
                'scaleBackdropPaddingY' => 2,

                //Number - The backdrop padding to the side of the label in pixels
                'scaleBackdropPaddingX' => 2,

                //Boolean - Show line for each value in the scale
                'scaleShowLine' => true,

                //Boolean - Stroke a line around each segment in the chart
                'segmentShowStroke' => true,

                //String - The colour of the stroke on each segement.
                'segmentStrokeColor' => "#fff",

                //Number - The width of the stroke value in pixels
                'segmentStrokeWidth' => 2,

                //Number - Amount of animation steps
                'animationSteps' => 100,

                //String - Animation easing effect.
                'animationEasing' => "easeOutBounce",

                //Boolean - Whether to animate the rotation of the chart
                'animateRotate' => true,

                //Boolean - Whether to animate scaling the chart from the centre
                'animateScale' => false,

                //String - A legend template
                'legendTemplate' => '<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>',
            ],

            // PIE & DOUGHNUT CHART
            'Pie' => [
                //Boolean - Whether we should show a stroke on each segment
                'segmentShowStroke' => true,

                //String - The colour of each segment stroke
                'segmentStrokeColor' => "#fff",

                //Number - The width of each segment stroke
                'segmentStrokeWidth' => 2,

                //Number - The percentage of the chart that we cut out of the middle
                'percentageInnerCutout' => 50, // This is 0 for Pie charts

                //Number - Amount of animation steps
                'animationSteps' => 100,

                //String - Animation easing effect
                'animationEasing' => "easeOutBounce",

                //Boolean - Whether we animate the rotation of the Doughnut
                'animateRotate' => true,

                //Boolean - Whether we animate scaling the Doughnut from the centre
                'animateScale' => false,

                //String - A legend template
                'legendTemplate' => '<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>',
            ],
        ],
    ]; 
    public $helpers = ['Html'];

    public function __construct(\Cake\View\View $View, $config = [])
    {
        parent::__construct($View, $config);
    }

    public function beforeRender($viewFile) {
        echo $this->Html->script("ChartJs.ChartJs/Chart", ['block' => true, 'once' => true]);
    }

    public function createChart($data = [], $options = []) { 
            
        // ERRORS EXCEPTIONS
        // Error if no data from view
        if(empty($data)) {
            echo $this->Html->scriptBlock('alert("You need to add some data to createChart() call to method");');
            return;
        }
        // Error if no Data for Chart
        if(!isset($data['Data']) || empty($data['Data'])) {
            echo $this->Html->scriptBlock('alert("You need to add some data[\'Data\'] to createChart() call to method");');
            return;
        }

        $data['Chart']['id'] = isset($data['Chart']['id']) ? $data['Chart']['id'] : $this->config('Chart.id');

        // Creating Chart element
        $chartScript = 'var ctx = document.getElementById("'. $data['Chart']['id'] .'").getContext("2d");';

        // Chart Data
        $chartScript .= 'var data = '. json_encode($data['Data']) . ';';

        // Chart Type
        $data['Chart']['type'] = (isset($data['Chart']['type'])) ? $data['Chart']['type'] : $this->config('Chart.type');
        switch($data['Chart']['type']) {
            case 'line':
                $chartType = 'Line';
                break;
            case 'bar':
                $chartType = 'Bar';
                break;
            case 'radar':
                $chartType = 'Radar';
                break;
            case 'polar':
                $chartType = 'PolarArea';
                break;
            case 'pie':
                $chartType = 'Pie';
                break;
            case 'doughnut':
                $chartType = 'Doughnut';
                break;
            default:
                $chartType = 'Line';
                break;
        }

        

        // Prepare Chart Options 
        $options = $this->setOptions($options, $data);
        $chartScript .= 'var options = '. $options .';';
        // Initialize chart object
        $chartScript .= 'var '. $data['Chart']['id'] .' = new Chart(ctx).'. $chartType .'(data, options);';

        // Canvas Settings
        $canvasId = (isset($data["Chart"]["id"])) ? $data["Chart"]["id"] : $this->config("Chart.id");
        $canvasClass = (isset($data["Canvas"]["class"])) ? $data["Canvas"]["class"] : $this->config("Canvas.class");
        $canvasWidth = (isset($data["Canvas"]["width"])) ? $data["Canvas"]["width"] : $this->config("Canvas.width");
        $canvasHeight = (isset($data["Canvas"]["height"])) ? $data["Canvas"]["height"] : $this->config("Canvas.height");
        $canvasZindex = (isset($data["Canvas"]["zindex"])) ? $data["Canvas"]["zindex"] : $this->config("Canvas.zindex");
        $canvasPosition = (isset($data["Canvas"]["position"])) ? $data["Canvas"]["position"] : $this->config("Canvas.position");
        $canvasCss = (isset($data['Canvas']['css'])) ? $data['Canvas']['css'] : $this->config('Canvas.css');
        $canvasWrapper = (isset($data['Canvas']['wrapper'])) ? $data['Canvas']['wrapper'] : $this->config('Canvas.wrapper');
        $canvasWrapperClass = (isset($data['Canvas']['wrapperClass'])) ? $data['Canvas']['wrapperClass'] : $this->config("Canvas.wrapperClass");

        // Adding Canvas
        $canvas = 'var chartCanvas = document.createElement("canvas");';
        $canvas .= 'chartCanvas.id = "'. $canvasId .'";';
        $canvas .= 'chartCanvas.className = "'. $canvasClass .'";';
        $canvas .= 'chartCanvas.width = '. $canvasWidth .';';
        $canvas .= 'chartCanvas.height = '. $canvasHeight .';';
        $canvas .= 'chartCanvas.style.zIndex = '. $canvasZindex .';';
        $canvas .= 'chartCanvas.style.position = "'. $canvasPosition .'";';
        if(is_array($canvasCss)) {
            foreach($canvasCss as $elementStyle => $value) {
                $canvas .= 'chartCanvas.style.'. $elementStyle .' = "'. $value .'";';
            } 
        }

        // Canvas Wrapper
        if($canvasWrapper === true) {
            $canvas .= 'var wrapperCanvasDiv = document.createElement("div");';
            $canvas .= 'wrapperCanvasDiv.style.position = "relative";';
            $canvas .= 'wrapperCanvasDiv.className = "'. $canvasWrapperClass .'";';
            $canvas .= 'document.body.appendChild(wrapperCanvasDiv);';
            $canvas .= 'wrapperCanvasDiv.appendChild(chartCanvas);';
        } else {
            $canvas .= 'document.body.appendChild(chartCanvas);';
        }
       
        // Result in inline javascript
        echo $this->Html->scriptBlock($canvas . $chartScript);
    }

    /**
     * Set options method to merge default options with controller options and view options.
     * Specific options are given within an array of type chart => [options]
     *
     * @param $opts array of options given
     * @param $data array of chart data
     * @return json object
     */
    protected function setOptions($opts, $data) 
    {

        // priority for options set from view
        if(isset($data['Options'])) {
            $opts['Options'] = isset($opts['Options']) ? array_merge($opts['Options'], $data['Options']) : $data['Options'];
        }

        foreach($this->config('Options') as $key => $value) {
            if(!in_array($key, ['Line', 'Bar', 'Radar', 'Polar', 'Pie', 'Doughnut'])) {
                $options[$key] = (isset($opts['Options'][$key])) ? $opts['Options'][$key] : $this->config('Options.'.$key);
            }
        }

        // SPECIFIC OPTIONS
        $chartType = (strtolower($data['Chart']['type'] === 'doughnut')) ? 'Pie' : ucfirst(strtolower($data['Chart']['type']));
    
        foreach($this->config('Options.'.$chartType) as $label => $val) {
            // chart type given without capital letters
            $options[$label] = (isset($opts['Options'][$chartType][$label])) 
                ? $opts['Options'][$chartType][$label] 
                : $this->config('Options.'.$chartType.'.'.$label);
            // chart type given with capital letter first
            $options[$label] = (isset($opts['Options'][ucfirst($chartType)][$label])) 
                ? $opts['Options'][$chartType][$label] 
                : $this->config('Options.'.$chartType.'.'.$label);
        }


        // solution for javascript functions encoded as strings with json_encode
        // http://solutoire.com/2008/06/12/sending-javascript-functions-over-json/
        $value_arr = array();
        $replace_keys = array();
        foreach($options as $key => &$value) {
            if(!is_array($value)) {
                // Look for values starting with 'function('
                if(strpos($value, 'function(') === 0) {
                    // Store function string.
                    $value_arr[] = $value;
                    // Replace function string in $foo with a 'unique' special key.
                    $value = '%' . $key . '%';
                    // Later on, we'll look for the value, and replace it.
                    $replace_keys[] = '"' . $value . '"';
                }
            }
        }

        $options = json_encode($options);

        // Replace the special keys with the original string.
        $options = str_replace($replace_keys, $value_arr, $options);
        
        return $options;
    }

}
