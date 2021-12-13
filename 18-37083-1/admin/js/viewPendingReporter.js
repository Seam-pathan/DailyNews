function MyAjaxFunc() {
    var xhttp = new XMLHttpRequest();
    var res;
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        res = JSON.parse(this.responseText);
        console.log(res);
        var maincontainer = document.getElementById("main-container");
        var name;
        var l = Object.keys(res).length;
        console.log(l);
        var f;
       
  
        for (i = 0; i < l; i++) {
          f = document.createElement("div");
          f.innerHTML = `
          <form action="../control/verifyreg.php" method="post">
          <div class="grid-container-1">
              <div>
                  <p>`+res[i].id+`</p>
              </div>
              <div>
                  <p>`+res[i].firstname+`</p>
              </div>
              <div>
                  <p>`+res[i].gender+`</p>
              </div>
              <div>
                  <p>`+res[i].DateOfBirth+`</p>
              </div>
              <div>
                  <p>`+res[i].Religion+`</p>
              </div>
              <div>
                  <p>`+res[i].PresentAddress+`</p>
              </div>
              <div>
                  <p>`+res[i].PermanentAddress+`</p>
              </div>
              <div>
                  <p>`+res[i].phone+`</p>
              </div>
              <div>
                  <p>`+res[i].email+`</p>
              </div>
              <div>
                  <p>`+res[i].username+`</p>
              </div>
              <div id="sub-grid">
                      <input class="btn-action btn-reject" type="submit" value="delete" name="delete">
                      <input class="btn-action btn-reject" type="submit" value="approve" name="approve">
              </div>
          </div>
          <div>
          </div>
          <input type="hidden" name="username" value="` + res[i].username + `">
          <input type="hidden" name="table" value="repoter">
          
          <input type="hidden" name="redirect_path" value="../view/ViewPendingReporter.php">
          </form>
          `;
  
          maincontainer.appendChild(f);
        }
      }
    };
  
    xhttp.open(
      "POST",
      "/DailyNews/admin/control/getPendingReporter.php",
      true
    );
  
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("fname=henry&lname=Ford");
  }