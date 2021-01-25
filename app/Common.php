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
		"ohlc"=> "OHLC",
		"column"=> "Column",
		"stick"=> "Stick",
	];

	public static $indicator = [
		"ADL"=>"Accumulation Distribution Line (ADL)",
		"AMA"=>"Adaptive Moving Average (AMA)",
		"Aroon"=>"Aroon",
		"ATR"=>"Average True Range (ATR)",
		"AOscillator"=>"Awesome Oscillator",
		"BBands"=>"Bollinger Bands",
		"BBandsB"=>"Bollinger Bands %B",
		"BBandsWidth" => "Bollinger Bands Width",
		"CMF" => "Chaikin Money Flow (CMF)",
		"CHO" => "Chaikin Oscillator (CHO)",
		"CCI" => "Commodity Channel Index (CCI)",
		"DMI" => "Directional Movement Index (DMI)",
		"ENV" => "Envelope",
		"EMA" => "Exponential Moving Average(EMA)",
		"HA" => "Heikin-Ashi",
		"IKH" => "Ichimoku Cloud (IKH)",
		"KDJ" => "KDJ",
		"KeltnerChannels" => "Keltner Channels",
		"MMA" => "Modified Moving Average",
		"Momentum" => "Momentum",
		"MFI" => "Money Flow Index (MFI)",
		"MACD"=> "Moving Average Convergence/Divergence",
		"OBV" => "On Balance Volume (OBV)",
		"PSAR" => "Parabolic SAR (PSAR)",
		"PriceChannels" => "Price Channels",
		"PPO" => "Price Oscillator indicator (PPO)",
		"PSY" => "Psychological Line (PSY)",
		"RCI" => "Rank Correlation Index (RCI)",
		'ROC'=> "Rate of Change (ROC)",
		"RSI" => "Relative Strength Index",
		"SMA" => "Simple Moving Average",
		"Stochastic" => "Stochastic",
		"Trix"=> "Triple Exponential Moving Average (TRIX)",
		"VolumeMA" => "Volume + Moving Average",
		"WilliamsR" => "Williams %R"
	];

	public static $indicatorFunc = [
		"ADL"=>"ADL()",
		"AMA"=>"AMA()",
		"Aroon"=>"Aroon()",
		"ATR"=>"ATR()",
		"AOscillator"=>"AOscillator()",
		"BBands"=>"BBands()",
		"BBandsB"=>"BBandsB()",
		"BBandsWidth" => "BBandsWidth()",
		"CMF" => "CMF()",
		"CHO" => "CHO()",
		"CCI" => "CCI()",
		"DMI" => "DMI()",
		"ENV" => "ENV()",
		"EMA" => "EMA()",
		"HA" => "HA()",
		"IKH" => "IKH()",
		"KDJ" => "KDJ()",
		"KeltnerChannels" => "KeltnerChannels()",
		"MMA" => "MMA()",
		"Momentum" => "Momentum()",
		"MFI" => "MFI()",
		"MACD"=> "MACD()",
		"OBV" => "OBV()",
		"PSAR" => "PSAR()",
		"PriceChannels" => "PriceChannels()",
		"PPO" => "PPO()",
		"PSY" => "PSY()",
		"RCI" => "RSI()",
		'ROC'=> "ROC()",
		"RSI" => "RSI()",
		"SMA" => "SMA()",
		"Stochastic" => "Stochastic()",
		"Trix"=> "Trix()",
		"VolumeMA" => "VolumeMA()",
		"WilliamsR" => "WilliamsR()"
	];

	public static $leverage =[
		"50 : 1" => "50 : 1",
		"30 : 1" => "30 : 1",
		"10 : 1" => "10 : 1",
	];

	
	
	
}
