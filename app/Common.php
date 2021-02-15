<?php

namespace App;

class Common
{	
	public static $instrument = [
		"EUR_USD" => "EUR/USD",
		"AUD_USD" => "AUD/USD",
		"GBP_USD" => "GBP/USD",
		"USD_JPY" => "USD/JPY",
		"EUR_JPY" => "EUR/JPY"
	];

	public static $annotation = [
		"andrews-pitchfork" => "Andrews' Pitchfork",
		"ellipse" => "Ellipse",
		"fibonacci-arc" => "Fibonacci Arc",
		"fibonacci-fan" =>  "Fibonacci Fan",
		"fibonacci-retracement" => "Fibonacci Retracement",
		"fibonacci-timezones" => "Fibonacci Time Zones",
		"horizontal-line" => "Horizontal Line ",
		"infinite-line" => "Infinite Line",
		"line" => "Line Segment",
		"marker" => "Marker",
		"ray" => "Ray",
		"rectangle" => "Rectangle",
		"trend-channel" => "Trend Channel",
		"triangle" => "Triangle",
		"vertical-line" => "Vertical Line"
	];

	public static $interval = [
		"S5"=> "5 Seconds", 
		"S10"=> "10 Seconds" ,
		"S15"=> "15 Seconds" ,
		"S30"=> "30 Seconds" ,
		"M1"=> "1 Minute" ,
		"M2"=> "2 Minutes" ,
		"M5"=> "5 Minutes" ,
		"M10"=> "10 Minute" ,
		"M15"=> "15 Minutes" ,
		"M30"=> "30 Minute" ,
		"H1"=> "1 Hour" ,
		"H2"=> "2 Hours" ,
		"H3"=> "3 Hours" ,
		"H4"=> "4 Hours" ,
		"H6"=> "6 Hours" ,
		"H8"=> "8 Hours" ,
		"H12"=> "12 Hours" ,
		"D"=> "1 Day" ,
		"W"=> "1 Week" ,
		"M"=> "1 Month",
	];

	public static $series =[
		"candlestick" => "Candlestick",
		"area"=> "Area",
		"line"=> "Line",
		"ohlc"=> "Bar",
		"column"=> "Column"
	];

	public static $indicator = [
		"ADL"=>"Accumulation Distribution Line (ADL)",
		"Aroon"=>"Aroon",
		"ATR"=>"Average True Range (ATR)",
		"BBands"=>"Bollinger Bands",
		"CCI" => "Commodity Channel Index (CCI)",
		"DMI" => "Directional Movement Index (DMI)",
		"EMA" => "Exponential Moving Average(EMA)",
		"Momentum" => "Momentum",
		"MFI" => "Money Flow Index (MFI)",
		"MACD"=> "Moving Average Convergence/Divergence",
		"OBV" => "On Balance Volume (OBV)",
		"PSAR" => "Parabolic SAR (PSAR)",
		'ROC'=> "Rate of Change (ROC)",
		"RSI" => "Relative Strength Index (RSI)",
		"SMA" => "Simple Moving Average (SMA)",
		"Stochastic" => "Stochastic Oscillator",
		"WilliamsR" => "Williams %R"
	];

	public static $indicatorFunc = [
		"ADL"=>"ADL(obj)",
		"Aroon"=>"Aroon(obj)",
		"ATR"=>"ATR(obj)",
		"BBands"=>"BBands(obj)",
		"CCI" => "CCI(obj)",
		"DMI" => "DMI(obj)",
		"EMA" => "EMA(obj)",
		"Momentum" => "Momentum(obj)",
		"MFI" => "MFI(obj)",
		"MACD"=> "MACD(obj)",
		"OBV" => "OBV(obj)",
		"PSAR" => "PSAR(obj)",
		'ROC'=> "ROC(obj)",
		"RSI" => "RSI(obj)",
		"SMA" => "SMA(obj)",
		"Stochastic" => "Stochastic(obj)",
		"WilliamsR" => "WilliamsR(obj)"
	];

	public static $leverage =[
		"50 : 1" => "50 : 1",
		"40 : 1" => "40 : 1",
		"30 : 1" => "30 : 1",
		"20 : 1" => "20 : 1",
		"10 : 1" => "10 : 1",
	];


}
