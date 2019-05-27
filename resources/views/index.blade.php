@extends('app')

@section('content')
<div class="container">
	<div class="panel panel-default">
        <div class="panel-heading"><h4>Welcome To Canada PNP Tracker</h4></div>
        <div class="panel-body">
            Please click on any Province from the below map to get the details of the PNP of that respective Canadian Province.
        </div>
        <div>
            <div class="text-center">
                <img src="/images/Canada.jpg" alt="Canada" usemap="#canadaMap">

                <map name="canadaMap">
                    <area alt="" title="" href="/province/yukon" shape="poly" coords="163,461,160,449,164,444,158,444,149,440,146,440,141,432,146,425,139,415,134,409,134,390,138,374,130,371,136,363,124,360,130,352,126,347,130,338,134,337,137,331,128,328,123,328,130,315,132,312,123,304,120,304,125,284,130,274,133,271,120,252,123,244,120,248,111,241,22,386,26,392,33,395,34,402,74,426,111,448" />
                    <area alt="" title="" href="/province/northWestTerritories" shape="poly" coords="164,465,246,481,309,489,369,488,367,406,297,393,291,381,275,378,230,325,236,297,220,286,214,292,263,279,304,296,312,255,329,132,326,125,277,148,263,169,238,197,238,213,219,241,229,259,212,293,214,275,205,288,194,263,190,274,182,260,173,264,160,263,151,268,155,261,140,263,133,266,128,277,120,304,133,309,124,326,136,327,136,342,129,360,131,364,135,364,137,382,133,394,142,422,144,438,153,439,162,443" />
                    <area alt="" title="" href="/province/nunavut" shape="poly" coords="368,490,426,484,441,434,455,427,459,408,499,414,522,430,529,410,547,419,552,433,563,415,585,407,597,399,619,383,629,379,657,379,678,379,661,372,633,369,633,356,657,359,671,359,659,345,639,332,615,325,613,323,606,311,610,304,638,318,652,318,647,294,647,281,638,278,625,281,588,276,580,275,594,258,579,258,583,249,537,234,529,241,495,210,470,197,474,184,463,165,471,147,468,149,462,140,470,123,468,89,472,77,474,33,474,33,476,17,466,8,450,14,420,28,413,43,400,60,389,78,381,101,379,126,369,133,355,113,347,117,351,141,349,152,342,146,339,187,331,170,327,165,321,200,317,235,306,294,260,278,230,290,237,296,231,321,282,381,293,377,321,393,368,402" />
                    <area alt="" title="" href="/province/britishColumbia" shape="poly" coords="34,401,35,413,40,428,61,423,62,440,66,488,80,510,70,529,35,529,39,571,50,540,62,548,66,595,60,606,80,645,97,664,121,655,222,681,216,669,218,655,208,639,179,596,168,579,195,476,162,465,108,444,63,419" />
                    <area alt="" title="" href="/province/alberta" shape="poly" coords="199,475,292,489,272,510,290,508,266,685,223,681,214,667,221,655,174,580" />
                    <area alt="" title="" href="/province/saskatchewan" shape="poly" coords="294,489,366,491,366,691,268,684" />
                    <area alt="" title="" href="/province/manitoba" shape="poly" coords="367,491,428,485,427,505,433,510,445,507,452,532,454,540,469,536,492,537,436,613,444,685,366,692" />
                    <area alt="" title="" href="/province/ontario" shape="poly" coords="494,540,504,549,536,559,565,552,573,589,614,614,636,684,679,695,704,687,709,696,687,727,669,722,656,729,658,749,672,756,624,786,623,774,629,757,624,724,643,731,630,707,619,719,574,705,545,676,527,678,514,695,488,697,454,694,445,683,437,616" />
                    <area alt="" title="" href="/province/quebec" shape="poly" coords="566,419,577,442,584,451,579,480,612,506,593,553,618,584,614,604,614,616,636,682,681,693,703,686,712,692,713,697,746,682,751,662,752,631,759,627,761,615,771,605,789,596,799,578,816,556,810,541,825,529,825,502,841,488,833,483,775,521,764,519,765,526,766,531,763,536,745,532,739,523,736,527,726,525,727,519,720,519,710,510,716,498,708,492,711,487,724,491,747,479,721,434,688,394,687,425,674,440,655,447,654,433,647,426,641,406,622,409,617,404,597,401" />
                    <area alt="" title="" href="/province/newfoundlandAndLabrador" shape="poly" coords="684,394,720,431,739,479,747,481,738,482,730,488,713,487,710,495,726,520,755,532,773,531,770,517,775,522,835,482,840,488,848,490,860,560,906,529,899,551,911,523,921,535,933,530,929,506,907,499,901,505,892,495,878,504,867,507,867,501,862,510,854,476,841,467,829,450,817,454,804,453,801,446,783,451,774,451,764,446,761,448,745,444,745,437,745,428" />
                    <area alt="" title="" href="/province/newBrunswick" shape="poly" coords="762,625,761,614,773,603,788,598,793,602,804,590,806,608,816,617,825,619,822,630,804,650,793,653,780,635" />
                    <area alt="" title="" href="/province/princeEdwardIsland" shape="poly" coords="819,600,833,607,841,597,842,613,828,615,815,604,817,598" />
                    <area alt="" title="" href="/province/novaScotia" shape="poly" coords="823,633,827,636,820,654,820,666,832,668,846,645,871,592,858,587,853,584,848,598,853,610,841,617,826,619" />
                
                </map>

            </div>
        </div>
    </div>
</div>
@endsection