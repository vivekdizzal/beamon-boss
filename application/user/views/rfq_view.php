 <section id="content_wrapper">

        <!-- Topbar -->
        <header id="topbar" class="alt">
            <div class="topbar-left">
                <ol class="breadcrumb">
                    <li class="breadcrumb-icon">
                        <a href="index.html">
                            <span class="fa fa-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-link">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-current-item">RFQ</li>
                </ol>
            </div>
        </header>
       <section id="content" class="table-layout animated fadeIn">
        <div class="chute chute-center">

<form action="<?php echo site_url('quotes/rfq_action'); ?>" method="post">
        <p>Type of Fixture </p>
        <select>
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
        </select>
        <p>Material</p><span id="material_span"></span>
        <div class="input_fields_wrap">
            <button class="add_field_button">Add More Fields</button>
            <div data="1"><p>Material 1</p><input type="text" name="name" id="name1" value="">
            <input type="text" name="xvalue" id="xvalue1" value="">
            <input type="text" name="yvalue" id="yvalue1" value="">
            <input type="text" name="total" id="total1"></div>
        </div>    
        

        <?php echo "**********************************</br></br>" ?>

        <p>others</p>
        <table>
        <th>
            <td style="width:20%;">Item</td>
            <td style="width:30%;">Cost/Unit</td>
            <td style="width:40%;">Quantity</td>
            <td style="width:20%;">Cost</td>
        </th>
        <tr>
            <td style="width:20%;"><input type="text" name="clamb" value="clamb" readonly /></td>
            <td style="width:30%;"><input type="text" name="unit-cost" /></td>
            <td style="width:40%;"><input type="text" name="quantity" /></td>
            <td style="width:20%;"><input type="text" name="total-cost" /></td>

        </tr>
        </table>

        <input type="button" id="calculate" value="Calculate" />
<input type="submit" value="Submit" />

        </div>
    </section>

    <script>
        $(document).ready(function() {
            var max_fields      = 10; //maximum input boxes allowed
            var wrapper         = $(".input_fields_wrap"); //Fields wrapper
            var add_button      = $(".add_field_button"); //Add button ID
            
            var list = new Array("1");

            var x = 1; //initlal text box count
            $(add_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(x < max_fields){ //max input box allowed
                    x++; //text box increment
                    
                    list.push(x);
                    $(wrapper).append('<div name='+x+'><p>Material'+ x +'</p><input type="text" name="name'+x+'" id="name'+x+'" value="" /><input type="text" name="xvalue'+x+'" id="xvalue'+x+'" value="" /><input type="text" name="yvalue'+x+'" id="yvalue'+x+'" value=""/><input type="text" name="total'+x+'" id="total'+x+'" value=""/><a href="#" class="remove_field">Remove</a></div>'); //add input box
                }
            });
            
            $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault(); 
                var z = $(this).parent('div').attr('name');
              
                $(this).parent('div').remove();
                list.pop();
                console.log(list);
                x--;
            });

            $("#calculate").click(function(){ //user click on remove text
                console.log(list);
                $.each( list, function( key,value ) {
                    var txt1= $('#name'+value).val();
                    var txt2= $('#xvalue'+value).val();
                    var txt3= $('#yvalue'+value).val();
                    var test = material_validation(txt1,txt2,txt3);
                    console.log(test);
                    var result = parseFloat(txt1)+parseFloat(txt2)+parseFloat(txt3);
                    var txt= $('#total'+value).val(result);
                    console.log(txt);

                });

                var total_material = calculate_material_total();
            
                $("#material_span").text(total_material);
                
            });


            function calculate_material_total()
            {
                var result = 0;
                $.each(list, function( key,value ) {
                    var txt= $('#total'+value).val();
                    result = parseFloat(result) + parseFloat(txt);
                });
                return result;
            }


        });

         function material_validation(val1,val2,val3){
                if(val1.length > 0 && val2.length > 0 && val3.length > 0)
                {
                    return true;
                }
                else
                {
                    alert("Validation Error");
                    return false;
                }
            }


    </script>