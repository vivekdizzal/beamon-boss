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


        <p>Type of Fixture </p>
        <select>
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
        </select>
        <p>Material</p>
        <div class="input_fields_wrap">
            <button class="add_field_button">Add More Fields</button>
            <div data-element="1"><p>Material 1</p><input type="text" name="name">
            <input type="text" name="xvalue">
            <input type="text" name="yvalue">
            <input type="text" name="total"></div>
        </div>    
        

        <?php echo "**********************************</br></br>" ?>

        <input type="button" id="calculate" value="Calculate" />


        </div>
    </section>

    <script>
        $(document).ready(function() {
            var max_fields      = 10; //maximum input boxes allowed
            var wrapper         = $(".input_fields_wrap"); //Fields wrapper
            var add_button      = $(".add_field_button"); //Add button ID
            
            var list = new Array();
            var x = 1; //initlal text box count
            $(add_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(x < max_fields){ //max input box allowed
                    x++; //text box increment
                    console.log(x);
                    list.push(x);
                    $(wrapper).append('<div data-element='+x+'><p>Material'+ x +'</p><input type="text" name="name'+x+'"/><input type="text" name="xvalue'+x+'"/><input type="text" name="yvalue'+x+'"/><input type="text" name="total'+x+'"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
                }
            });
            
            $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault(); 
                var z = $(this).attr('data-element');
                alert(z);
                $(this).parent('div').remove();

                x--;
            });

            $("#calculate").click(function(){ //user click on remove text
               var a;
                for(a=1;a<=x;a++)
                {
                    console.log(a);
                }
            });
        });

    </script>