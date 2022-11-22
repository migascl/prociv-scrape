var webPage = require('webpage');
var fs = require('fs');
var page = webPage.create();
var tmp = Date.now();
var hoje = new Date().toISOString().slice(0, 10);
page.onConsoleMessage = function(msg) {
    console.log(msg);
};


page.open('http://www.prociv.pt/pt-pt/SITUACAOOPERACIONAL/Paginas/pesquisa.aspx', function () {
	page.includeJs("http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js", function() {
		setTimeout(function() {
			page.evaluate(function() {
				var ev = document.createEvent("MouseEvents");
				ev.initEvent("click", true, true);

				document.getElementsByClassName("input-group-btn")[0].children[0].dispatchEvent(ev);
				var t = Array.from(document.getElementsByClassName("uib-day text-center ng-scope"));
				t.forEach(
					function(item,index){
						if(item.children[0].className=='btn btn-default btn-sm btn-info active')t[index-1].children[0].dispatchEvent(ev);
					}
				);
				document.getElementsByClassName("input-group-btn")[1].children[0].dispatchEvent(ev);
				var t = Array.from(document.getElementsByClassName("uib-day text-center ng-scope"));
				t.forEach(
					function(item,index){
						if(item.children[0].className=='btn btn-default btn-sm btn-info active')t[index-1].children[0].dispatchEvent(ev);
					}
				);

				document.querySelector("div[class='button search ng-binding']").dispatchEvent(ev);
			});
	  	}, 1000);
	  // Checks for bottom div and scrolls down from time to time
		setTimeout(function() {
		  setInterval(function() {

			  // Checks if there is a div with class=".has-more-items"

			  var count = page.content.match(/class="cursor-pointer ng-binding"/g);

			  if(count === null) {
				// Didn't find
				page.evaluate(function() {
					console.log(document.querySelectorAll("tr[class='ng-scope active-line']")[document.querySelectorAll("tr[class='ng-scope active-line']").length-1].innerText);
				});
				console.log("exported");
				tmp = Date.now() - tmp;
				page.evaluate(function() {
					var tb = document.getElementsByClassName("table subtable");
					for(var x=0;x<tb.length;x++){
						var td = "";
						for(var y=0;y<tb[x].children[0].childElementCount;y++){
							td +=tb[x].children[0].children[y].children[1].innerText+"||";
						}
						$.ajax({
							async: false, // this
							url: 'http://localhost/save.php',
							data: "dados="+td,
							type: 'post',
							success: function (output) {
								console.log('Solved');
							},
						});
					}
				});
				phantom.exit();
			  }
			  else { // Found
				page.evaluate(function() {
					var ev = document.createEvent("MouseEvents");
					ev.initEvent("click", true, true);
					document.querySelector("span[class='cursor-pointer ng-binding']").dispatchEvent(ev);
					console.log(document.querySelectorAll("tr[class='ng-scope active-line']")[document.querySelectorAll("tr[class='ng-scope active-line']").length-1].innerText);
				});

			  }
		  }, 3100);
		},3000);// Number
	});
});
