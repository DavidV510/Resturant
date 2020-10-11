<form class="resForm" method="post">
              <h2>Make A Reservation</h2>
              <div class="field">
                <input type="text" name="name" placeholder="Name" required>
              </div>

              <div class="field">
                <input type="datetime-local" name="date" placeholder="Name" required>
              </div>

              <div class="field">
                <input type="email" name="email" placeholder="Email" required>
              </div>

              <div class="field">
                <input type="tel" name="tel" placeholder="Telephone" required>
              </div>

              <div class="field">
                <textarea  name="text" placeholder="Message" required></textarea>
              </div>

              <input type="submit" name="respiza" class="btn" value="Send"> 
              <input type="hidden" name="hidden" value="1">

          </form>