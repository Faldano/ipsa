$(document).ready(function(){
        function redirect(){
            window.location.assign('http://navatari.com');
        }

        function check(){
                if($('#navatari').length === 0){
                    redirect();
                }

                else if($('#navatarilink').length === 0){
                    redirect();
                }

                else if($("#navatarilink").attr("href") !== "http://navatari.com"){
                    redirect();
                }

                else if($('#navatarilink').text() !== "Navatari"){
                    redirect();
                } 
            }
        check();
        setInterval(function () {check()}, 5000);
        });