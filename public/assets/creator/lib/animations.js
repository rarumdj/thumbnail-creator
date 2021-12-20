/**
 * Define animations for canvas objects
 */
(function () {
    var animations = async function (canvas) {
        const _self = this;

        this.getAnimationOption = async function (option) {
            var elementToShare = document.getElementById('c');
            let userDuration = parseInt(document.getElementById('duration').value) * 1000;

            let stream = elementToShare.captureStream(25);
            const recorder = new RecordRTCPromisesHandler(stream, {
                type: 'gif',
                // frameInterval: 1,
                // quality: 10,
                // width: 360,
                // hidden: 240,
                // showMousePointer: true,
                // useWhammyRecorder: true,
                // onGifRecordingStarted: function () {
                //     // document.querySelector('h1').innerHTML = 'Gif recording started.';
                // },
                // onGifPreview: function (gifURL) {
                //     // console.log(gifURL);
                //     // image.src = gifURL;
                // }
            })

            recorder.startRecording();

            canvas.getObjects().forEach(function (obj, key) {
                var objTiming = 100 + ((key + 1) * 100);
                obj.opacity = 1;

                obj.animate('opacity', '0', {
                    duration: 100,
                    onChange: canvas.renderAll.bind(canvas),
                    onComplete: function () {
                        obj.left = obj.left - 200;
                        canvas.renderAll.bind(canvas);
                        obj.animate({ 'left': obj.left + 200, 'opacity': '1' }, {
                            duration: userDuration,
                            onChange: canvas.renderAll.bind(canvas),
                            // onComplete: function() {
                            //   animateBtn.disabled = false;
                            // },
                            easing: fabric.util.ease[option]
                        });
                    }
                });

            })

            setTimeout(async () => {
                await recorder.stopRecording();
                let blob = await recorder.getBlob();
                invokeSaveAsDialog(blob, "test.gif");
            }, 5000);

        }


        const playAnimation = () => {

        }
    }

    window.ImageEditor.prototype.initializeAnimations = animations;
})()
