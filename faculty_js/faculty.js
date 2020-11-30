var valueField = document.getElementById('value');
var resultField = document.getElementById('result');
var decreaseButton = document.getElementById('decreaseButton');
var increaseButton = document.getElementById('increaseButton');

this.minValue = 1;
this.maxValue = 9;

this.value = 1;

// Calculate faculty, recursive, n = x * [...] * 2 * 1
function calculateFaculty(x, sum = 1) {
	if( x < 2 ) { return sum; }
	else { return calculateFaculty(x - 1, sum * x); }
}

function increaseValue() {
	if(this.value < this.maxValue) {
		this.value++;
		render();
	}
}

function decreaseValue() {
	if(this.value > this.minValue) {
		this.value--;
		render();
	}
}

// Render data to page
function render() {
	valueField.textContent = this.value;
	resultField.textContent = calculateFaculty(this.value);

	// Disable Increasebutton if maxvalue has been reached
	if(this.value >= this.maxValue) { increaseButton.disabled = true; } 
	else { increaseButton.disabled = false; }

	// Disable Decreasebutton if minvalue has been reached
	if(this.value <= this.minValue) { decreaseButton.disabled = true; } 
	else { decreaseButton.disabled = false; }
}

this.render();