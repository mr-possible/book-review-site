@csrf
<div class="field">
    <input type="hidden" name="book_id" value={{ $result->id }}>
    <input type="hidden" name="user_id" value={{ Auth::user()->id }}>
    <label class="label">Review Title:</label>
    <div class="control">
      <input id="review-title" class="input" type="text" name="review-title" placeholder="Please enter your title" required />
    </div>
</div>
<div class="field">
    <label class="label">Rating (1-10):</label>
    <div class="control">
      <input id="review-rating" class="input" type="number" name="review-rating" required/>
    </div>
</div>
<div class="field">
    <label class="label">Review Body:</label>
    <div class="control">
      <textarea id="review-body" class="textarea" name="review-body" placeholder="Elaborate your review" rows="6" required></textarea>
    </div>
</div>