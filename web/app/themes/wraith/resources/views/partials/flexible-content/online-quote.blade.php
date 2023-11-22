@php
$title = get_sub_field('title');
$paragraph = get_sub_field('paragraph');
$path = get_sub_field('path');
@endphp


<section id="online-quote" class="section_quoting-engine flex-row justify-end items-center py-16">
  <div class="mx-auto p-3 lg:w-1/2 ">
    <div class="mx-auto lg:w-8/12 relative text-center">
      <h2 class="lg:text-3xl text-2xl text-tertiary font-serif">
      {!! $title !!}
      </h2>
    {!! $paragraph ? '<div class="child-p:text-tertiary child-p:font-normal my-6">' . $paragraph . '</div>' : null !!}
    </div>
    <div id="engine-container">

    </div>
  </div>
</section>

<script src="https://js.quotingengine.co.uk/v1"></script>
<script>
  (function($) {
    var engine = $('#engine-container').Engine('pk_d3wkOfNB7atIvPKC0K4iQONm', {
      start: function(event) {
        gtag('event', 'Start Quote', {
          event_category: 'Quoting Engine',
        })
      },
      postcode: function(event) {
        gtag('event', 'Enter Postcode', {
          event_category: 'Quoting Engine',
        })
      },
      complete: function(event) {
        gtag('event', 'Complete Quote', {
          event_category: 'Quoting Engine',
        })
      }
    })

    engine.render()
    @if (is_page(2309))
            $(window).load(function() {
                engine.open();
            });
        @endif
  })(jQuery)
</script>
