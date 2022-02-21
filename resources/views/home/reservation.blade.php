<section id="book-table">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>Book Your Table Now</h2>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-2 col-sm-12">
                <div class="left-image">
                    <img src="img/book_left_image.jpg" alt="">
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="right-info">
                    <h4>Reservation</h4>
                    <form id="form-submit" action="{{ url('reservation') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6" style="top: -30px;">
                                <fieldset>
                                    <input required type="date" class="form-control" name="date" id="" min="{{ date('Y-m-d') }}">
                                </fieldset>
                            </div>
                            <div class="col-md-6" style="top: -30px;">
                                <fieldset>
                                    <input type="time" name="time" id="" class="form-control" min="10:00" max="22:00">
                                    {{-- <select required name='hour' onchange='this.form.()'>
                                        <option value="">Select hour</option>
                                        <option value="10-00">10:00</option>
                                        <option value="12-00">12:00</option>
                                        <option value="14-00">14:00</option>
                                        <option value="16-00">16:00</option>
                                        <option value="18-00">18:00</option>
                                        <option value="20-00">20:00</option>
                                        <option value="22-00">22:00</option>
                                    </select> --}}
                                </fieldset>
                            </div>
                            <div class="col-md-6" style="top: -60px;">
                                <fieldset>
                                    <input name="name" type="name" class="form-control" id="name" placeholder="Full name" required="">
                                </fieldset> 
                            </div>
                            <div class="col-md-6" style="top: -60px;">
                                <fieldset>
                                    <input name="phone" type="phone" class="form-control" id="phone" placeholder="Phone number" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-6" style="top: -100px;">
                                <fieldset>
                                    <input type="number" name="number_of_guests" id="" class="form-control" max="6" min="1" placeholder="Number of persons">
                                    {{-- <select required class="person" name='persons' onchange='this.form.()'>
                                        <option value="">How many persons?</option>
                                        <option value="1-Person">1 Person</option>
                                        <option value="2-Persons">2 Persons</option>
                                        <option value="3-Persons">3 Persons</option>
                                        <option value="4-Persons">4 Persons</option>
                                        <option value="5-Persons">5 Persons</option>
                                        <option value="6-Persons">6 Persons</option>
                                    </select> --}}
                                </fieldset>
                            </div>
                            <div class="col-md-6" style="top: -70px;">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Book Table</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>