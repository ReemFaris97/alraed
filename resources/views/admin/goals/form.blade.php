
@include('admin.common.errors')
@include('admin.common.alert')

<div class="form-group form-float">
    <label class="form-label">المباراة</label>
    <div class="form-line">
        {!! Form::select("match_id",matches(),null,['class'=>'form-control','placeholder'=>'اختر اسم المباراة'])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">الفريق </label>
    <div class="form-line">
        {!! Form::select("team_id",teams(),null,['class'=>'form-control','id'=>'team_id','placeholder'=>'اختر الفريق'])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">اللاعب الذي أحرز الهدف</label>
    <div class="form-line">
        {!! Form::select("player_id",[],null,['class'=>'form-control', 'id'=>'player_id','placeholder'=>'اختر اللاعب'])!!}
    </div>
</div>


<div class="form-group form-float">
    <label class="form-label">الدقيقة التي أحرز فيها الهدف</label>
    <div class="form-line">
        {!! Form::text("minuit",null,['class'=>'form-control','placeholder'=>'الدقيقة التي أحرز فيها الهدف...'])!!}
    </div>
</div>


<button class="btn btn-primary waves-effect" type="submit">حفظ</button>

@push('scripts')
    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#team_id").change(function () {
            var team_id = $("#team_id").val();
            var base_url = "{{asset('/')}}";
            // console.log(team_id);
            $.ajax({
                type: 'get',
                url: base_url + "dashboard/ajax-team/" + team_id,
                success: function (data) {

                    $("#player_id").empty();

                    $.each(data, function (key, value) {
                        var option = '<option value="' + value.id + '">' + value.ar_name + '</option>';
                        // console.log(value);
                        $("#player_id").append(option);
                    });
                    // co

                    $("#player_id").selectpicker('refresh');
                },
                error: function () {

                }
            });

        });


    </script>
    @endpush