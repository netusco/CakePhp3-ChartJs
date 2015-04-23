# ChartJs plugin for CakePHP

## Requirements

* CakePHP 3.0.0 or greater
* PHP 5.4.16 or greater
* Chart.js 1.0.2 or greater (https://github.com/nnnick/Chart.js)

## Copyright and license

This software is registered under the MIT license. Copyright(c) 2015 - Ernest Conill

## Installation

* Clone this plugin from [Github](https://github.com/netusco/CakePhp-ChartJs.git)
You will need a ChartJs directory in your plugins folder so from your app root directory you can use:

```sh
git clone https://github.com/netusco/CakePhp-ChartJs.git plugins/ChartJs/
```

* This plugin uses Chart.js javascript plugin cloned into webroot/js/ChartJs you can pull the sources for updates

* Load the plugin

```php
Plugin::load('ChartJs', ['bootstrap' => false, 'routes' => false]);
```

### Reporting Issues

If you have a problem with this plugin please open an issue.

### Contributing

I'm not actively maintaining this plugin, but it's open for community contributions.

# Documentation

### Controller 

* Add the plugin's helper in your list of helpers. You can pass config options general for the Chart (type, id), for the Canvas (position, width, direct css, ...) or Options from [Chart.js documentation](http://www.chartjs.org/docs/) again general or particular for each type of chart.

Types of chart are named `['line', 'bar', 'radar', 'polar', 'pie', 'dougnut']`

```php
    public $helpers = [
        'ChartJs.Chartjs' => [
            'Chart' => [
                'type' => 'bar',
            ],
            'Canvas' => [
                'position' => 'relative',
                'width' => 750,
                'height' => 300,
                'css' => ['padding' => '10px'],
            ],
            'Options' => [
                'responsive' => true,
                'Bar' => [
                    'scaleShowGridLines' => false 
                ]
            ],
        ]
    ];
```
All these config options will be overriden by the ones present in the view. If no config option is given the helper use it's own defaults.

* Create $dataChart variable with the data values needed for the chart. Below two examples for different types of charts:

**Types** ['line', 'bar', 'radar']
```php
$dataChart = [
    'labels' => ["January", "February", "March", "April", "May", "June", "July"],
    'datasets' => [
            [ 
                'label' => "My First dataset",
                'fillColor' => "rgba(220,220,220,0.2)",
                'strokeColor' => "rgba(220,220,220,1)",
                'pointColor' => "rgba(220,220,220,1)",
                'pointStrokeColor' => "#fff",
                'pointHighlightFill' => "#fff",
                'pointHighlightStroke' => "rgba(220,220,220,1)",
                'data' => [65, 59, 80, 81, 56, 55, 40]
            ],
            [
                'label' => "My Second dataset",
                'fillColor' => "rgba(151,187,205,0.2)",
                'strokeColor' => "rgba(151,187,205,1)",
                'pointColor' => "rgba(151,187,205,1)",
                'pointStrokeColor' => "#fff",
                'pointHighlightFill' => "#fff",
                'pointHighlightStroke' => "rgba(151,187,205,1)",
                'data' => [28, 48, 40, 19, 86, 27, 90]
            ]
    ]
];
```

**Types** ['polar', 'pie', 'doughnut']
```php
$dataChart = [
   [
       'value' => 300,
       'color' =>"#F7464A",
       'highlight' => "#FF5A5E",
       'label' => "Red"
   ],
   [
       'value' => 50,
       'color' => "#46BFBD",
       'highlight' => "#5AD3D1",
       'label' => "Green"
   ],
   [
       'value' => 100,
       'color' => "#FDB45C",
       'highlight' => "#FFC870",
       'label' => "Yellow"
   ],
   [
       'value' => 40,
       'color' => "#949FB1",
       'highlight' => "#A8B3C5",
       'label' => "Grey"
   ],
   [
       'value' => 120,
       'color' => "#4D5360",
       'highlight' => "#616774",
       'label' => "Dark Grey"
   ]
];
```

### View

* Use the helper with the method createChart where you can pass the same data than in the controller helper initialization. The data from the View will override the one from the controller.

```php
echo $this->Chartjs->createChart([
    'Chart' => [
        'id' => 'myBarChart',
        'type' => 'bar'
    ], 
    'Data' => $dataChart,
    'Options' => [
        'Bar' => [
            'scaleShowGridLines' => false
        ],
        'responsive' => true
    ]
]);
```
There is default options for 'Chart' (type is 'line') and 'Options' both general and specific for each Chart type. But it is required to pass the Data well structured. Data might come from the controller or can be structured in the view...

## Configuration

Configuration options are passed on the controller call to helper or from the viewcall to create a chart.
Options passed from the view override the ones of the controller.
