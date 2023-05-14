<div class="container is-max-widescreen">
@csrf
  <div class="field">
    <label class="label">Search A Book</label>
    <div class="control">
      <input class="input" type="text" name="query" placeholder="Search a book" required/>
    </div>
  </div>
  <div class="field is-grouped">
    <div class="control">
      <button class="button is-primary" type="submit">Search</button>
    </div>
  </div>
</div>

<!-- 
                  References:
  HTML: https://developer.mozilla.org/en-US/docs/Web/HTML
  Bulma CSS: https://bulma.io/documentation/
  Livewire: https://laravel-livewire.com/docs/2.x/quickstart
  Laravel: https://laravel.com/docs/10.x/readme 
-->