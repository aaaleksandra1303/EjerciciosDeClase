<!DOCTYPE html>
<html>
<head>
    <title>pregunta 6.1</title>
</head>
<body>
<?php



    function toEur($usd)

    {
        $eur_rate=1.1215;
       // $result=round($usd*$eur_rate,2);
       // $result=$usd*$eur_rate;
        printf("%.2f€",$usd*$eur_rate,2);
    }


    function toUsd($euro){
          $usd_rate=0.89166;
         // $result=round($euro*$usd_rate,2);
          prinf("$%.2f",$euro*$usd_rate,2);
    }

    function conversionMsg($number,$from,$to){

        $rates=[
        EUR=1]


        $currency_format=[
        EUR=""]



       $k=[
                'en'=>5,
                'de'=>3,
                'us'=>2,
                'jp'=>10,
                'pl'=>1
            ];

       printf(($number*$k[$to]*$k['pl']/$k[$from],2).$to);

              /*  switch('$to'){
                    case 'EUR': toEur(number);
                    break;
                    case 'USD': toUsd(number);
                    break;
                    default: printf(" Error");
                    break;


                }*/
            }

            conversion(10,'en','pl');







    toUsd(45);
    toEur(45);

 ?>

</body>
</html>