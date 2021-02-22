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

    public static $forumTags= [
        1 => "General Forex Discussion",
        2 => "Forex News",
        3 => "Fundamental Analysis",
        4 => "Technical Analysis",
        5 => "Forex Education",
        6 => "Trading System and Strategies",
        7 => "Forex Signals",
        8 => "Newbie Questions",
        9 => "Others"
    ];

    // public static $allTags= [
    //     0 => "All Posts",
    //     1 => "Your Posts",
    //     2 => "General Forex Discussion",
    //     3 => "Forex News",
    //     4 => "Fundamental Analysis",
    //     5 => "Technical Analysis",
    //     6 => "Forex Education",
    //     7 => "Trading System and Strategies",
    //     8 => "Forex Signals",
    //     9 => "Newbie Questions",
    //     10 => "Others"
    // ];

	public static $learningPage = [
		[
            'key' => "learning-intro",
            'value' => "Introduction to Forex Market",
            'parent' => "Forex Introduction",
            'description' => "The foreign exchange market is perhaps the most interesting of all markets, as it is one of the few markets where the sheer size of the market makes it almost imposssible for any person, institution or government to control. The word FOREX is derived from Foreign Exchange and is the largest financial market in the world......"
        ],
        [
            'key' => "learning-trader",
            'value' => "Forex Trader Types",
            'parent' => "Forex Introduction",
            'description' => "Forex traders tend to fit into one of the following six trading types: scalper, day trader, swing trader, position trader, algorithmic trader, and event-driven trader. Read about the separate types below and discover the character traits that are optimal for each......"
        ],
        [
            'key' => "learning-stock",
            'value' => "Forex Vs Stock",
            'parent' => "Forex Introduction",
            'description' => "Traders often compare forex vs stocks to determine which market is better to trade. Despite being interconnected, the forex and stock market are vastly different. The forex market has unique characteristics that set it apart from other markets, and in the eyes of many, also make it far more attractive to trade......"
        ],
        [
            'key' => "learning-benefit",
            'value' => "Forex Benefits",
            'parent' => "Forex Introduction",
            'description' => "There are many benefits and advantages to trading Forex. Here are just a few reasons why so many people are choosing this market as a business opportunity......"
        ],
        //Forex Knowledge
        [
            'key' => "learning-currency",
            'value' => "Currency Pair",
            'parent' => "FOREX Knowledge",
            'description' => "A currency pair is the quotation of two different currencies, with the value of one currency being quoted against the other. The first listed currency of a currency pair is called the base currency, and the second currency is called the quote currency......"
        ],
        [
            'key' => "learning-leverage",
            'value' => "Leverage & Margin",
            'parent' => "FOREX Knowledge",
            'description' => "Margin and leverage are among the most important concepts to understand when trading forex. These essential tools allow forex traders to control trading positions that are substantially greater in size than would be the case without the use of these tools......"
        ],
        [
            'key' => "learning-quote",
            'value' => "Quotes",
            'parent' => "FOREX Knowledge",
            'description' => "Forex quotes reflect the price of different currencies at any point in time. Since a trader’s profit or loss is determined by movements in price (the quote), it is essential to develop a sound understanding of how to read currency pairs......"
        ],
        [
            'key' => "learning-pips",
            'value' => "Pips",
            'parent' => "FOREX Knowledge",
            'description' => "Pip is an acronym for percentage in point or price interest point. A pip is the smallest price move that an exchange rate can make based on forex market convention. Most currency pairs are priced out to four decimal places and......"
        ],
        [
            'key' => "learning-spread",
            'value' => "Spread",
            'parent' => "FOREX Knowledge",
            'description' => "very market has a spread and so does forex. A spread is simply defined as the price difference between where a trader may purchase or sell an underlying asset. Traders that are familiar with equities will synonymously call this the......"
        ],
        [
            'key' => "learning-liquidity",
            'value' => "Liquidity",
            'parent' => "FOREX Knowledge",
            'description' => "Liquidity refers to how active a market is. It is determined by how many traders are actively trading and the total volume they’re trading. One reason the foreign exchange market is so liquid is because it is tradable 24 hours a day......"
        ],
        [
            'key' => "learning-session",
            'value' => "Trading Session",
            'parent' => "FOREX Knowledge",
            'description' => "There are three major forex trading sessions which comprise the 24-hour market: the London session, the US session and the Asian session. Each major geographic market center can exhibit vastly unique traits and tendencies that can allow traders......"
        ],
        [
            'key' => "learning-chart",
            'value' => "Chart Types",
            'parent' => "FOREX Knowledge",
            'description' => "he line chart is the original type of chart. In order to plot it, a line connects single prices for a selected time period. The most popular line chart is the daily chart. Although any point in the day can be plotted, most traders......."
        ],
        [
            'key' => "learning-trade",
            'value' => "How To Trade",
            'parent' => "FOREX Knowledge",
            'description' => "Now that you know a little more about forex, we’ll take a closer look at how to make your first trade. Before you trade you need to follow a few steps. When trading forex you are exchanging the value of one currency for another. In other words......"
        ],
        [
            'key' => "learning-mistake",
            'value' => "Common Trading Mistake",
            'parent' => "FOREX Knowledge",
            'description' => "Trading forex can be a rewarding and exciting challenge, but it can also be discouraging if you are not careful. Whether you’re new to forex trading or an experienced veteran, avoiding these trading mistakes can help keep your trades on the right track......."
        ],
        //Forex Order
        [
            'key' => "learning-long-short",
            'value' => "Long Position vs Short Position",
            'parent' => "FOREX Order",
            'description' => "Understanding the basics of going long or short in forex is fundamental for all beginner traders. Taking a long or short position comes down to whether a trader thinks a currency will appreciate (go up) or depreciate (go down), relative to another currency......."
        ],
        [
            'key' => "learning-bullish-bearish",
            'value' => "Bearish & Bullish",
            'parent' => "FOREX Order",
            'description' => "Simply put, a bear market is one in which prices are heading down and a bull market is used to describe conditions in which prices are rising. When the bulls reign in the market, people are looking to invest money; confidence is high and......."
        ],
        [
            'key' => "learning-types",
            'value' => "Order Types",
            'parent' => "FOREX Order",
            'description' => "There are many different types of forex orders, which traders use to manage their trades. While these may vary between different brokers, there tends to be several basic FX order types all brokers accept. Knowing what these are and......."
        ],
        //Candlestick Patterns
        [
            'key' => "learning-candlestick",
            'value' => "Candlestick Introduction",
            'parent' => "Candlestick Patterns",
            'description' => "Candlestick charts are a type of financial chart for tracking the movement of securities. They have their origins in the centuries-old Japanese rice trade and have made their way into modern day price charting. Some investors ......."
        ],
        [
            'key' => "learning-bearish-engulfing",
            'value' => "Bearish Engulfing",
            'parent' => "Candlestick Patterns",
            'description' => "A bearish engulfing pattern is a technical chart pattern that signals lower prices to come. The pattern consists of an up (white or green) candlestick followed by a large down (black or red) candlestick that eclipses or engulfs the smaller up ......."
        ],
        [
            'key' => "learning-bullish-engulfing",
            'value' => "Bullish Engulfing",
            'parent' => "Candlestick Patterns",
            'description' => "A bullish engulfing pattern is a white candlestick that closes higher than the previous day's opening after opening lower than the previous day's close. It can be identified when a small black candlestick, showing a bearish trend ......."
        ],
        [
            'key' => "learning-evening-star",
            'value' => "Evening Star",
            'parent' => "Candlestick Patterns",
            'description' => "An Evening Star is a stock-price chart pattern used by technical analysts to detect when a trend is about to reverse. It is a bearish candlestick pattern consisting of three candles: a large white candlestick, a small-bodied candle ......."
        ],
        [
            'key' => "learning-morning-star",
            'value' => "Morning Star",
            'parent' => "Candlestick Patterns",
            'description' => "A morning star is a visual pattern consisting of three candlesticks that is interpreted as a bullish sign by technical analysts. A morning star forms following a downward trend and it indicates the start of an upward climb. It is a sign of a reversal ......."
        ],
        [
            'key' => "learning-doji",
            'value' => "Doji",
            'parent' => "Candlestick Patterns",
            'description' => "A doji—or more accurately, dо̄ji—is a name for a session in which the candlestick for a security has an open and close that are virtually equal and are often components in patterns. Doji candlesticks look like a cross, inverted cross or plus sign ......."
        ],
        [
            'key' => "learning-hammer",
            'value' => "Hammer",
            'parent' => "Candlestick Patterns",
            'description' => "A hammer is a price pattern in candlestick charting that occurs when a security trades significantly lower than its opening, but rallies within the period to close near opening price. This pattern forms a hammer-shaped candlestick, in which ......."
        ],
        [
            'key' => "learning-spinning-top",
            'value' => "Spinning Top",
            'parent' => "Candlestick Patterns",
            'description' => "A spinning top is a candlestick pattern that has a short real body that's vertically centered between long upper and lower shadows. The candlestick pattern represents indecision about the future direction of the asset. It means that neither ......."
        ],
        [
            'key' => "learning-three-white-soldiers",
            'value' => "Three White Soldiers",
            'parent' => "Candlestick Patterns",
            'description' => "Three white soldiers is a bullish candlestick pattern that is used to predict the reversal of the current downtrend in a pricing chart. The pattern consists of three consecutive long-bodied candlesticks that open within the previous candle's real ......."
        ],
        [
            'key' => "learning-three-black-crows",
            'value' => "Three Black Crows",
            'parent' => "Candlestick Patterns",
            'description' => "Three black crows is a phrase used to describe a bearish candlestick pattern that may predict the reversal of an uptrend. Candlestick charts show the day's opening, high, low, and closing prices for a particular security ......."
        ],
        //Chart Patterns
        [
            'key' => "learning-chart-intro",
            'value' => "Chart Patterns Introduction",
            'parent' => "Chart Patterns",
            'description' => "For many analysts, the chart of a security is the starting point for all future analysis. Even staunch critics of technical analysis use charts to some extent. And for good reason: charts can provide a lot of information in a small amount  ......."
        ],
        [
            'key' => "learning-cup-and-handle",
            'value' => "Cup And Handle",
            'parent' => "Chart Patterns",
            'description' => "A cup-and-handle pattern resembles the shape of a tea cup on a chart. This is a bullish continuation pattern where the upward trend has paused, and traded down, but will continue in an upward direction upon the completion of the ......."
        ],
        [
            'key' => "learning-double-top-bottom",
            'value' => "Double Top & Double Bottom",
            'parent' => "Chart Patterns",
            'description' => "The double top and double bottom are another pair of well-known chart patterns whose names don’t leave much to the imagination. These two reversal patterns illustrate a security's attempt to continue an existing trend. Upon several ......."
        ],
        [
            'key' => "learning-flags-pennants",
            'value' => "Flags & Pennants",
            'parent' => "Chart Patterns",
            'description' => "The flag and pennant patterns are two continuation patterns that closely resemble each other, differing only in their shape during the pattern's consolidation period. This is the reason the terms flag and pennant are often used ......."
        ],
        [
            'key' => "learning-head-and-shoulders",
            'value' => "Head And Shoulders",
            'parent' => "Chart Patterns",
            'description' => "The head-and-shoulders pattern is one of the most popular and reliable chart patterns in technical analysis. And as one might imagine from the name, the pattern looks like a head with two shoulders. Head and shoulders is a reversal ......."
        ],
        [
            'key' => "learning-round-bottom",
            'value' => "Round Bottoms",
            'parent' => "Chart Patterns",
            'description' => "A rounding bottom, also referred to as a saucer bottom, is a long-term reversal pattern that signals a shift from a downtrend to an uptrend. This pattern is traditionally thought to last anywhere from several months to several years. Due ......."
        ],
        [
            'key' => "learning-wedge",
            'value' => "The Wedge",
            'parent' => "Chart Patterns",
            'description' => "The wedge chart pattern signals a reverse of the trend that is currently formed within the wedge itself. Wedges are similar in construction to a symmetrical triangle in that there are two trendlines - support and resistance - which ......."
        ],
        [
            'key' => "learning-triangle",
            'value' => "Triangle",
            'parent' => "Chart Patterns",
            'description' => "As you may have noticed, chart pattern names don't leave much to the imagination. This is no different for the triangle patterns, which clearly form the shape of a triangle. The basic construct of this chart pattern is the convergence of ......."
        ],
        [
            'key' => "learning-triple-top-bottom",
            'value' => "Triple Top & Triple Bottom",
            'parent' => "Chart Patterns",
            'description' => "The triple top and triple bottom are reversal patterns that are formulated when a security attempts to move past a key level of support or resistance in the direction of the prevailing trend. This chart pattern represents the market's attempt ......."
        ],
        //Fundamental Analysis
        [
            'key' => "learning-fundamental",
            'value' => "Fundamental Analysis Introduction",
            'parent' => "Fundamental Analysis",
            'description' => "Fundamental Analysis is a broad term that describes the act of trading based purely on global aspects that influence supply and demand of currencies, commodities, and equities. Many traders will use both fundamental and technical methods to determine when and where ......."
        ],
        //Technical Analysis
        [
            'key' => "learning-technical-intro",
            'value' => "Technical Analysis Introduction",
            'parent' => "Technical Analysis",
            'description' => "Technical analysis is the study of historical price action in order to identify patterns and determine probabilities of future movements in the market through the use of technical studies, indicators, and other analysis tools......"
        ],
        [
            'key' => "learning-breakout",
            'value' => "Breakout",
            'parent' => "Technical Analysis",
            'description' => "A breakout refers to when the price of an asset moves above a resistance area, or moves below a support area. Breakouts indicate the potential for the price to start trending in the breakout direction. For example, a breakout to the upside......"
        ],
        [
            'key' => "learning-gaps",
            'value' => "Gaps",
            'parent' => "Technical Analysis",
            'description' => "Gaps are sharp breaks in price with no trading occurring in between. Gaps can happen moving up or moving down. In the forex market, gaps primarily occur over the weekend because it is the only time the forex market closes. Gaps may also occur......"
        ],
        [
            'key' => "learning-slippage",
            'value' => "Slippage",
            'parent' => "Technical Analysis",
            'description' => "Slippage can be a common occurrence in forex trading but is often misunderstood. Understanding how forex slippage occurs can enable a trader to minimize negative slippage, while potentially maximizing positive slippage. These......"
        ],
        [
            'key' => "learning-support-resistance",
            'value' => "Support & Resistance",
            'parent' => "Technical Analysis",
            'description' => "Support and resistance is a powerful pillar in trading and most strategies have some type of support/resistance (S/R) analysis built into them. Support and resistance tends to develop around key areas that price has regularly approached and......"
        ],
        [
            'key' => "learning-trend",
            'value' => "Trend",
            'parent' => "Technical Analysis",
            'description' => "A trend is the overall direction of a market or an asset's price. In technical analysis, trends are identified by trendlines or price action that highlight when the price is making higher swing highs and higher swing lows for an......"
        ],
        [
            'key' => "learning-volume",
            'value' => "Volumes",
            'parent' => "Technical Analysis",
            'description' => "Volume is the amount of an asset or security that changes hands over some period of time, often over the course of a day. For instance, stock trading volume would refer to the number of shares of a security traded between its daily open and close......"
        ],
        //Technical Indicator
        [
            'key' => "learning-indicator-intro",
            'value' => "Technical Indicator Introduction",
            'parent' => "Technical Indicators",
            'description' => "Technical indicators are heuristic or pattern-based signals produced by the price, volume, and/or open interest of a security or contract used by traders who follow technical analysis......."
        ],
        [
            'key' => "learning-adl",
            'value' => "Accumulation Distribution Line",
            'parent' => "Technical Indicators",
            'description' => "The accumulation/distribution indicator also called as ADL or A/D is a cumulative indicator that uses volume and price to assess whether a stock is being accumulated or distributed. The A/D measure seeks to identify divergences between......."
        ],
        [
            'key' => "learning-aroon",
            'value' => "Aroon",
            'parent' => "Technical Indicators",
            'description' => "The Aroon Oscillator is a trend-following indicator that uses aspects of the Aroon Indicator (Aroon Up and Aroon Down) to gauge the strength of a current trend and the likelihood that it will continue. Readings above zero indicate that......."
        ],
        [
            'key' => "learning-atr",
            'value' => "Average True Range",
            'parent' => "Technical Indicators",
            'description' => "The average true range (ATR) is a technical analysis indicator, introduced by market technician J. Welles Wilder Jr. in his book New Concepts in Technical Trading Systems, that measures market volatility by decomposing the entire range of an asset price for that period........"
        ],
        [
            'key' => "learning-bollinger",
            'value' => "Bollinger Band",
            'parent' => "Technical Indicators",
            'description' => "A Bollinger Band is a technical analysis tool defined by a set of trendlines plotted two standard deviations (positively and negatively) away from a simple moving average (SMA) of a security's price, but which can be adjusted to user preferences........"
        ],
        [
            'key' => "learning-cci",
            'value' => "Commodity Channel Index",
            'parent' => "Technical Indicators",
            'description' => "Developed by Donald Lambert, the Commodity Channel Index (CCI) is a momentum-based oscillator used to help determine when an investment vehicle is reaching a condition of being overbought or oversold........"
        ],
        [
            'key' => "learning-dmi",
            'value' => "Directional Movement Index",
            'parent' => "Technical Indicators",
            'description' => "The Directional Movement Index, or DMI, is an indicator developed by J. Welles Wilder in 1978 that identifies in which direction the price of an asset is moving. The indicator does this by comparing prior highs and lows and drawing two........"
        ],
        [
            'key' => "learning-macd",
            'value' => "MACD",
            'parent' => "Technical Indicators",
            'description' => "The Moving Average Convergence Divergence (MACD) is a technical indicator which simply measures the relationship of exponential moving averages (EMA).The MACD displays a MACD line (red), signal line (orange) and a histogram (yellow) - showing........"
        ],
        [
            'key' => "learning-momentum",
            'value' => "Momentum",
            'parent' => "Technical Indicators",
            'description' => "Momentum is the speed or velocity of price changes in a stock, security, or tradable instrument. Momentum shows the rate of change in price movement over a period of time to help investors determine the strength of a trend. Stocks that tend to move........"
        ],
        [
            'key' => "learning-mfi",
            'value' => "Money Flow Index",
            'parent' => "Technical Indicators",
            'description' => "The Money Flow Index (MFI) is a technical oscillator that uses price and volume data for identifying overbought or oversold signals in an asset. It can also be used to spot divergences which warn of a trend change in price. The oscillator........"
        ],
        [
            'key' => "learning-ma",
            'value' => "Moving Average",
            'parent' => "Technical Indicators",
            'description' => "In technical analysis, the moving average (MA) is an indicator used to represent the average closing price of the market over a specified period of time. Traders often make use of moving averages as it can be a good indication of current market........"
        ],
        [
            'key' => "learning-obv",
            'value' => "On-Balance Volume",
            'parent' => "Technical Indicators",
            'description' => "On-balance volume (OBV) is a technical trading momentum indicator that uses volume flow to predict changes in stock price. Joseph Granville first developed the OBV metric in the 1963 book Granville's New Key to Stock Market Profits........."
        ],
        [
            'key' => "learning-psar",
            'value' => "Parabolic SAR",
            'parent' => "Technical Indicators",
            'description' => "The parabolic SAR (PSAR) indicator, developed by J. Wells Wilder, is used by traders to determine trend direction and potential reversals in price. The indicator uses a trailing stop and reverse method called SAR, or stop and reverse, to identify........."
        ],
        [
            'key' => "learning-roc",
            'value' => "Rate Of Change",
            'parent' => "Technical Indicators",
            'description' => "The Price Rate of Change (ROC) is a momentum-based technical indicator that measures the percentage change in price between the current price and the price a certain number of periods ago. The ROC indicator is plotted against zero, with the indicator........."
        ],
        [
            'key' => "learning-rsi",
            'value' => "Relative Strength Index",
            'parent' => "Technical Indicators",
            'description' => "The relative strength index (RSI) is a momentum indicator used in technical analysis that measures the magnitude of recent price changes to evaluate overbought or oversold conditions in the price of a stock or other asset. The RSI is displayed........."
        ],
        [
            'key' => "learning-stochastic",
            'value' => "Stochastic Oscillator",
            'parent' => "Technical Indicators",
            'description' => "A stochastic oscillator is a momentum indicator comparing a particular closing price of a security to a range of its prices over a certain period of time. The sensitivity of the oscillator to market movements is reducible by adjusting........."
        ],
        [
            'key' => "learning-william",
            'value' => "William %R",
            'parent' => "Technical Indicators",
            'description' => "Williams %R, also known as the Williams Percent Range, is a type of momentum indicator that moves between 0 and -100 and measures overbought and oversold levels. The Williams %R may be used to find entry and exit points in the market. The indicator........."
        ],
	];

}
