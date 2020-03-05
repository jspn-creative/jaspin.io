{{-- #stripe --}} {{----–-----–-----–-----–-----–-----–-----–-----–-----}}
<section class="stripe">
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-page')
  @endwhile
</section>
{{-- /stripe --}} {{----–-----–-----–-----–-----–-----–-----–-----–-----}}

<script>
  console.log(location.search);

  /**
 * Accepts either a URL or querystring and returns an object associating
 * each querystring parameter to its value.
 *
 * Returns an empty object if no querystring parameters found.
 */
function getUrlParams(urlOrQueryString) {
  if ((i = urlOrQueryString.indexOf('?')) >= 0) {
    const queryString = urlOrQueryString.substring(i+1);
    if (queryString) {
      return _mapUrlParams(queryString);
    }
  }

  return {};
}

/**
 * Helper function for `getUrlParams()`
 * Builds the querystring parameter to value object map.
 *
 * @param queryString {string} - The full querystring, without the leading '?'.
 */
function _mapUrlParams(queryString) {
  return queryString
    .split('&')
    .map(function(keyValueString) { return keyValueString.split('=') })
    .reduce(function(urlParams, [key, value]) {
      if (Number.isInteger(parseInt(value)) && parseInt(value) == value) {
        urlParams[key] = parseInt(value);
      } else {
        urlParams[key] = decodeURI(value);
      }
      return urlParams;
    }, {});
}

let urlParams = getUrlParams(location.search); // Assume location.search = "?a=1&b=2b2"
console.log(urlParams); // Prints { "a": 1, "b": "2b2" }
jQuery(document).ready(function ($) {
  if (urlParams.hasOwnProperty('hmc')) {
    stripeButton = "#" + urlParams.hmc;
    console.log(stripeButton)
    $(stripeButton).click();
  }
})
</script>
