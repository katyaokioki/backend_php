<div class="container">
    <form action="index.php" method="POST">
        <input type="hidden" name="save">
        <div class="form-group">
            <label for="firstname">Firstname</label>
            <input type="text" class="form-control" id="firstname"  name="firstname" required>
        </div>
        <div class="form-group">
            <label for="firstname">Name</label>
            <input type="text" class="form-control" id="name"  name="name" required>
        </div>
        <div class="form-group">
            <label for="lastname">Lastname</label>
            <input type="text" class="form-control" id="lastname"  name="lastname" required>
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select class="form-control" id="gender" name="gender">
                <option>female</option>
                <option>male</option>
            </select>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="date"  name="date" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="tel" class="form-control" id="phone"  name="phone" maxlenght="15" minlenght="10" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea class="form-control" id="address" rows="3" name="address" required></textarea>
        </div>
        <div class="form-group">
            <label for="coment">Coment</label>
            <textarea class="form-control" id="coment" rows="3" name="coment"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Save</button>
    </form>
</div>