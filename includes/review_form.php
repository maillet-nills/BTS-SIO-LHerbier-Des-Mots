<form action="../includes/review_proccess" method="post">
    <fieldset class="border rounded-3 p-4 mb-4 bg-white shadow-sm">

        <div class="row g-3 mb-3">
            
            <div class="col-md">
                <label for="name" class="form-label fw-semibold">Nom</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Votre nom">
            </div>

            <div class="row g-2 mb-2">
                <div class="col-md">
                    <label class="form-label fw-semibold d-block">Service</label>
                    <div style="display:flex; flex-direction:row-reverse; gap:4px; width:fit-content;">
                        <input type="radio" name="service-stars" id="service-5" value="5" style="display:none;">
                        <label for="service-5" title="5 étoiles" style="font-size:2rem; color:#ccc; cursor:pointer; line-height:1;" onmouseover="highlightStars(this)" onmouseout="resetStars(this)">★</label>
                        <input type="radio" name="service-stars" id="service-4" value="4" style="display:none;">
                        <label for="service-4" title="4 étoiles" style="font-size:2rem; color:#ccc; cursor:pointer; line-height:1;">★</label>
                        <input type="radio" name="service-stars" id="service-3" value="3" style="display:none;">
                        <label for="service-3" title="3 étoiles" style="font-size:2rem; color:#ccc; cursor:pointer; line-height:1;">★</label>
                        <input type="radio" name="service-stars" id="service-2" value="2" style="display:none;">
                        <label for="service-2" title="2 étoiles" style="font-size:2rem; color:#ccc; cursor:pointer; line-height:1;">★</label>
                        <input type="radio" name="service-stars" id="service-1" value="1" style="display:none;">
                        <label for="service-1" title="1 étoile" style="font-size:2rem; color:#ccc; cursor:pointer; line-height:1;">★</label>
                    </div>
                </div>
            </div>

            <div class="row g-1 mb-1">
                <div class="col-md">
                    <label class="form-label fw-semibold d-block">Ambiance</label>
                    <div style="display:flex; flex-direction:row-reverse; gap:4px; width:fit-content;">
                        <input type="radio" name="ambiance-stars" id="ambiance-5" value="5" style="display:none;">
                        <label for="ambiance-5" title="5 étoiles" style="font-size:2rem; color:#ccc; cursor:pointer; line-height:1;">★</label>
                        <input type="radio" name="ambiance-stars" id="ambiance-4" value="4" style="display:none;">
                        <label for="ambiance-4" title="4 étoiles" style="font-size:2rem; color:#ccc; cursor:pointer; line-height:1;">★</label>
                        <input type="radio" name="ambiance-stars" id="ambiance-3" value="3" style="display:none;">
                        <label for="ambiance-3" title="3 étoiles" style="font-size:2rem; color:#ccc; cursor:pointer; line-height:1;">★</label>
                        <input type="radio" name="ambiance-stars" id="ambiance-2" value="2" style="display:none;">
                        <label for="ambiance-2" title="2 étoiles" style="font-size:2rem; color:#ccc; cursor:pointer; line-height:1;">★</label>
                        <input type="radio" name="ambiance-stars" id="ambiance-1" value="1" style="display:none;">
                        <label for="ambiance-1" title="1 étoile" style="font-size:2rem; color:#ccc; cursor:pointer; line-height:1;">★</label>
                    </div>
                </div>
            </div>

            <div class="row g-1 mb-1">
                <div class="col-md">
                    <label class="form-label fw-semibold d-block">Nourriture</label>
                    <div style="display:flex; flex-direction:row-reverse; gap:4px; width:fit-content;">
                        <input type="radio" name="food-stars" id="food-5" value="5" style="display:none;">
                        <label for="food-5" title="5 étoiles" style="font-size:2rem; color:#ccc; cursor:pointer; line-height:1;">★</label>
                        <input type="radio" name="food-stars" id="food-4" value="4" style="display:none;">
                        <label for="food-4" title="4 étoiles" style="font-size:2rem; color:#ccc; cursor:pointer; line-height:1;">★</label>
                        <input type="radio" name="food-stars" id="food-3" value="3" style="display:none;">
                        <label for="food-3" title="3 étoiles" style="font-size:2rem; color:#ccc; cursor:pointer; line-height:1;">★</label>
                        <input type="radio" name="food-stars" id="food-2" value="2" style="display:none;">
                        <label for="food-2" title="2 étoiles" style="font-size:2rem; color:#ccc; cursor:pointer; line-height:1;">★</label>
                        <input type="radio" name="food-stars" id="food-1" value="1" style="display:none;">
                        <label for="food-1" title="1 étoile" style="font-size:2rem; color:#ccc; cursor:pointer; line-height:1;">★</label>
                    </div>
                </div>
            </div>

            <div class="row g-1 mb-1">
                <div class="col-md">
                    <label for="situation" class="form-label fw-semibold">Situation</label>
                    <select id="situation" class="form-select" name="situation">
                    <option selected>Non Spécifié</option>
                    <option value="Seul.e">Seul.e</option>
                    <option value="Accompagné.e">Accompagné.e</option>
                    </select>
                </div>
            </div>

            <div class="row g-1 mb-1">
                <div class="col-md">
                    <label for="review" class="form-label fw-semibold">Laissez un avis :</label>
                    <textarea name="review" id="review" class="form-control" rows="3" style="resize:none" placeholder="Votre avis"></textarea>
                </div>
            </div>

            <div class="row g-1">
                <div class="col-md">
                    <button type="submit" name="review-send" id="review-send" class="btn btn-success btn-lg px-5 shadow">
                    Envoyer
                    </button>
                </div>
            </div>
        </div>

    </fieldset>
</form>