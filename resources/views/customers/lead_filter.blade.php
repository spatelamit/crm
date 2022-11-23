

<?php if ($data['leads_data'] != null){
   foreach ($data['selected_fields'] as $key => $selected_field) {
            $field1[]=$selected_field->col_name;

     }
 $selfield=$field1;
 $selfield1=implode(",",  $selfield);
 // print_r($selfield1);
     }


                                    ?>







                        <table id="leads" class="display table  leads">
                            <thead>

                                <tr>
                                    <div>

                                        <th><input id="selectAll" type="checkbox" name="selectAll"></th>
                                        <th>Data_id</th>
                                        <th>Sale Person</th>
                                    </div>
                                    @if ($data['selected_col'] != null)
                                        @foreach ($data['selected_col'] as $key => $value)
                                        <th>{{ $value->col_name }}</th>
                                        @endforeach
                                    
                                    @endif
                                        <th>Actions </th>



                                </tr>

                            </thead>
                            <tbody>

                                @if ($data['leads_data'] != null)
                                    @foreach ($data['leads_data'] as $key1 => $field)
                                        <tr>

                                            <td>
                                                <div>
                                                    <input class="data_id" type="checkbox" name="data_id"
                                                        value="
                                                {{ $data['leads_data'][$key1]['data_id'] }}">
                                                    <input id="email{{ $loop->iteration }}" class="email"
                                                        type="checkbox" name="email"
                                                        value="{{ $data['leads_data'][$key1]['email_address'] }}"
                                                        style="display: none;">
                                                    
                                                    <input id="mobile_num{{ $loop->iteration }}" class="mobile_num"
                                                        type="checkbox" name="mobile_num"
                                                        value="{{$data['leads_data'][$key1]['contact_number'] }}"
                                                        style="display: none;">
                                                </div>
                                            </td>
                                             <td class="details-control"> <a
                                                            href="{{ url('lead-profile', $data['leads_data'][$key1]['data_id']) }}">{{ $data['leads_data'][$key1]['data_id'] }}</a>
                                                </td>
                                                    <td>{{ $data['leads_data'][$key1]['sale_person'] }}</td>
                                        @if ($data['selected_col'] != null)    
                                              @foreach ($data['selected_col'] as $key => $selvalue)
                                                <td class="details-control">
                                                <?php if(isset($data['leads_data'][$key1][$selvalue->col_name] )){ ?>
                                                 {{ $data['leads_data'][$key1][$selvalue->col_name] }}
                                                 <?php } else{
                                                    echo 'Null';
                                                 }?>
                                             </td>
                                            @endforeach
                                         @endif

                                           

                                            <td>

                                                <div class="btn-group btn-group-sm" style="float: none;">


                                                    <a class="btn btn-info mr-2"
                                                        href="{{ url('edit-lead', $data['leads_data'][$key1]['data_id']) }}"><span
                                                            class="fa fa-pencil"
                                                            style="float: none; margin: 5px;"></span>
                                                    </a>
                                                    <a class="btn btn-danger"
                                                        onclick="deletelead( '{{ $data['leads_data'][$key1]['data_id'] }}' )">
                                                        <span class="fa fa-trash"
                                                            style="float: none; margin: 5px;"></span>
                                                    </a>


                                                </div>




                                            </td>
                                        </tr>
                                        <!-- edit -->

                                        <!-- edit -->
                                    @endforeach
                                @endif

                            </tbody>
                        </table>
                   
<script>
    $(document).ready(function() {
        $('.leads').DataTable({
            dom: 'Bfrtip',
            scrollX: true,

            

        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $(':checkbox[id="selectAll"]').click(function() {
            var val1 = [];
            var val2 = [];
            var val3 = [];
            if ($(this).is(':checked')) {


                $(".data_id").prop("checked", true);
                $(".email").prop("checked", true);
                $(".mobile_num").prop("checked", true);
                $('.email').each(function(i) {
                    val2[i] = $(this).val();

                });
                $('.mobile_num').each(function(i) {
                    val3[i] = $(this).val();
                 
                });
            } else {
                $(".name").prop("checked", false);
                $(".data_id").prop("checked", false);
                $(".email").prop("checked", false);
                $(".mobile_num").prop("checked", false);
                $(".app-checkbox").prop("checked", false);
                // $('.email').each(function(i){
                //        val2[i] = $(this).val();
                //      });
            }

            var val1 = [];
            $('.data_id').each(function(i) {
                val1[i] = $(this).val();

            });

            // $("#selectedemails").val(val1);

            val2 = val2.filter(Boolean);
            val3 = val3.filter(Boolean);
            $(".email_ids").val(val2);
            $(".email_ids").attr("readonly", "readonly");

            $(".sms_numbers").val(val3);
            $(".sms_numbers").attr("readonly", "readonly");
            $("#selectedemails").val(val2);
            $("#selectedcontacts").val(val3);
            // console.log(val2);
            // console.log(val3);
        });


        $(':checkbox[class="data_id"]').click(function() {
            var data_id = [];
            if ($(this).is(':checked')) {
                $(".mobile_num").prop("checked", true);
                $(".ids12").prop("checked", true);
                $(".email").prop("checked", true);


                data_id = $(this).val();
                // alert(data_id);
                $("#lead_id").val(data_id);
                $('#related_to').val(data_id);
            } else {
                $(".mobile_num").prop("checked", false);
                $(".ids12").prop("checked", false);
                $(".email").prop("checked", false);
            }



            // $(".email_ids").val(val2);
            // console.log(val2);

        });



    });
</script>



