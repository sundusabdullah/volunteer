

<div id="announcement">
    <section class="container-fluid bg-1 text-center mt-5" >
        <ads class="borderBottom pb-2 font-weight-bolder news-title mb-5">
           الأعلانات
        </ads>
        <div id="card">
                @include('User.nav.ads.ads_data')

        </div>
    </section>
</div>
<script>
    jQuery(document).ready(function(){

        jQuery(document).on('click', '.page-link', function(event){
            event.preventDefault();
            var page = jQuery(this).attr('href').split('page=')[1];
            fetch_data(page);
        });

        function fetch_data(page)
        {
            var _token = $("input[name=_token]").val();
            jQuery.ajax({
                url:"{{ route('pagination.fetch') }}",
                method:"POST",
                data:{_token:_token, page:page},
                success:function(data)
                {
                    $('#card').html(data);
                }
            });
        }

    });
</script>
