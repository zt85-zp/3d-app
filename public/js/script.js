const cameraviews = Array.from(document.getElementsByClassName("cameras"));

console.log(cameraviews);

function clearActiveCamera() {
	cameraviews.forEach((elem) => {
		elem.classList.remove("active-camera");
	});
}

function cameraFront() {
	clearActiveCamera();
	document.getElementById("model__CameraFront").setAttribute("bind", "true");
	document.getElementById("front").classList.add("active-camera");
}

function cameraBack() {
	clearActiveCamera();
	document.getElementById("model__CameraBack").setAttribute("bind", "true");
	document.getElementById("back").classList.add("active-camera");
}

function cameraLeft() {
	clearActiveCamera();
	document.getElementById("model__CameraLeft").setAttribute("bind", "true");
	document.getElementById("left").classList.add("active-camera");
}

function cameraRight() {
	clearActiveCamera();
	document.getElementById("model__CameraRight").setAttribute("bind", "true");
	document.getElementById("right").classList.add("active-camera");
}

function cameraTop() {
	clearActiveCamera();
	document.getElementById("model__CameraTop").setAttribute("bind", "true");
	document.getElementById("top").classList.add("active-camera");
}

function cameraBottom() {
	clearActiveCamera();
	document.getElementById("model__CameraBottom").setAttribute("bind", "true");
	document.getElementById("bottom").classList.add("active-camera");
}

let wiremode = false;
var e = document.getElementById("wire");

function toggleWireMode() {
	wiremode = !wiremode;
	if (wiremode) {
		document.getElementById("slider-container").classList.add("on");
		e.runtime.togglePoints(true);
		e.runtime.togglePoints(true);
	} else {
		document.getElementById("slider-container").classList.remove("on");
		e.runtime.togglePoints(false);
		e.runtime.togglePoints(false);
	}
}

// Ajax Functionality
function aboutMore(product) {
	var xhr = new XMLHttpRequest();

	xhr.onreadystatechange = function () {
		if (xhr.readyState === XMLHttpRequest.DONE) {
			if (xhr.status == 4 || xhr.status === 200) {
				var data = JSON.parse(xhr.responseText);
				var resultContainer =
					document.getElementById("result-container");
				resultContainer.classList.remove("d-none");

				resultContainer.innerHTML = "";

				data.forEach(function (item) {
					var itemName = item.Name;
					if (
						[
							"Cola1",
							"Cola2",
							"Cola3",
							"Cola4",
							"Cola5",
							"Cola6",
						].includes(itemName)
					)
						itemName = "Coca-Cola";
					var itemDescription = item.Description;
					var listItem = document.createElement("h4");
					listItem.classList.add("mt-3", "fst-italic");
					listItem.textContent = itemName;
					var listDesc = document.createElement("p");
					listDesc.textContent = itemDescription;
					resultContainer.appendChild(listItem);
					resultContainer.appendChild(listDesc);
				});
			} else {
				console.error("There was a problem with the request.");
			}
		}
	};

	xhr.open(
		"GET",
		"../../app/models/Model.php?product='" + product + "'",
		true
	);
	xhr.send();
}

function animateModel() {
	var sensor = Array.from(document.getElementsByTagName("TimeSensor"))[0];
	console.log(sensor);
	console.log(sensor.getAttribute("enabled"));
	if (sensor.getAttribute("enabled") == false) {
		sensor.setAttribute("enabled", "true");
		console.log("ehh");
	} else {
		console.log("Hell");
	}
}
