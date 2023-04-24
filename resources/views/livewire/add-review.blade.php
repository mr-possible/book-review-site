@csrf
<input type="hidden" name="book_id" value="{{ $result->id }}">
<!--WILL use AUTH USER LATER  <input type="hidden" name="user_id" value="{{ Auth::id() }}"> -->
<input type="hidden" name="user_id" value="1">
<label for="review-title">Review Title:</label>
<input type="text" id="review-title" name="review-title" required>
<label for="review-rating">Rating (1-10):</label>
<input type="number" id="review-rating" name="review-rating" required>
<label for="review-body">Review Body:</label>
<textarea id="review-body" name="review-body" required></textarea>