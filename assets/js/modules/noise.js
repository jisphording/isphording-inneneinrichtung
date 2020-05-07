export default class Noise {
    // ANIMATED BACKGROUND NOISE CANVAS //
    // -------------------------------------------------------------------------------- //
    /* Here the noise function itself is created. To implement it you have to put a Canvas element into your HTML and position it 'above' your background wrapper and 'below' the content with css. The containing wrapper has to have 'overflow: hidden;'

    TODO:
    - It would be very nice to programmatically get the size of the wrapper object with Javascript to automatically give the canvas the correct size without the user needing to define a whole lot of css declarations for it.

    USAGE:
    -> new Noise('#insertNoiseCanvasIDHere', SpeedTheNoiseIsMovingAt);

    */

    constructor(el, sp) {
        this.noise(el, sp);
    }

    noise(el, sp) {
        let canvas, ctx;
    
        let wWidth, wHeight;
    
        let noiseData = [];
        let frame = 0;

        // If speed (sp) was set then use (sp). If it was not set initialize with a speed of 25
        let speed = sp ? sp : 25;
    
        let loopTimeout;
    
    
        // Create Noise
        const createNoise = () => {
            const idata = ctx.createImageData(wWidth, wHeight);
            const buffer32 = new Uint32Array(idata.data.buffer);
            const len = buffer32.length;
    
            for (let i = 0; i < len; i++) {
                if (Math.random() < 0.5) {
                    buffer32[i] = 0xff000000;
                }
            }
    
            noiseData.push(idata);
        };
    
    
        // Play Noise
        const paintNoise = () => {
            if (frame === 9) {
                frame = 0;
            } else {
                frame++;
            }
    
            ctx.putImageData(noiseData[frame], 0, 0);
        };
    
    
        // Loop
        const loop = () => {
            paintNoise(frame);
    
            loopTimeout = window.setTimeout(() => {
                window.requestAnimationFrame(loop);
            }, (1000 / speed));
        };
    
    
        // Setup
        const setup = () => {
            wWidth = window.innerWidth;
            wHeight = window.innerHeight;
    
            canvas.width = wWidth;
            canvas.height = wHeight;
    
            for (let i = 0; i < 10; i++) {
                createNoise();
            }
    
            loop();
        };
    
    
        // Reset
        let resizeThrottle;
        const reset = () => {
            window.addEventListener('resize', () => {
                window.clearTimeout(resizeThrottle);
    
                resizeThrottle = window.setTimeout(() => {
                    window.clearTimeout(loopTimeout);
                    setup();
                }, 200);
            }, false);
        };
    
    
        // Init
        const init = (() => {
            canvas = document.getElementById(el);
            ctx = canvas.getContext('2d');
    
            setup();
        })();
    };
}