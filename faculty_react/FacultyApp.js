import React, { useState } from 'react';

function FacultyApp() {
	// Preset bounds for values
	const minValue = 1;
	const maxValue = 9;

	// Preset states of UI
	const [result, setResult] = useState(1);
	const [userValue, setUserValue] = useState(1);
	const [isBtnInc, setBtnInc] = useState(true);
	const [isBtnDesc, setBtnDesc] = useState(false);

	// Calculate faculty, recursive, n = x * [...] * 2 * 1
	const calculateFaculty = (x, value = 1) => {
		if ( x < 2) { return value; } 
		else { return calculateFaculty(x - 1, value * x); }
	}

	// Switch buttons disabled state according to the value bounds
	const buttonState = (value) => {
		if(value >= maxValue) { setBtnInc(false); } 
		else { setBtnInc(true); }

		if(value <= minValue) { setBtnDesc(false); } 
		else { setBtnDesc(true); }
	}

	// +1	
	const increaseValue = () => {
		if(userValue < maxValue) { 
			setUserValue(userValue + 1);
			buttonState(userValue + 1);
			setResult(calculateFaculty(userValue + 1));
		}
	}

	// -1
	const decreaseValue = () => {
		if(userValue > minValue) { 
			setUserValue(userValue - 1);
			buttonState(userValue - 1);
			setResult(calculateFaculty(userValue - 1));
		}
	}

	return(
		<div>
			<p>Calculate: {userValue}! = {result}</p>
			<button disabled={!isBtnDesc} onClick={decreaseValue}>-1</button>
			<button disabled={!isBtnInc} onClick={increaseValue}>+1</button>
		</div>
	);
};

export default FacultyApp;