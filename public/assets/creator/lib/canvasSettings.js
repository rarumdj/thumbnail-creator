/**
 * initialize canvas setting panel
 */
(function () {
  'use strict';
  var canvasSettings = function () {
    const _self = this;
    $(`${this.containerSelector} .main-panel .toolpanel-container`).append(`<toolpanel-container class="toolpanel" id="settings-panel"><div class="content"><p class="title">Canvas Settings</p></div></toolpanel-container>`);

    // set dimension section
    (() => {
      $(`${this.containerSelector} .toolpanel#settings-panel .content`).append(`
      <div class="canvas-size-setting">
        <p>Canvas Size</p>
        <div class="input-container">
          <label>Width</label>
          <div class="custom-number-input">
          <button class="decrease">-</button>
          <input type="number" min="100" id="input-width" value="640"/>
          <button class="increase">+</button>
          </div>
        </div>
        <div class="input-container">
          <label>Height</label>
          <div class="custom-number-input">
          <button class="decrease">-</button>
          <input type="number" min="100" id="input-height" value="480"/>
          <button class="increase">+</button>
          </div>
        </div>
      </div>
    `);

      var setDimension = () => {
        try {
          let width = $(`${this.containerSelector} .toolpanel#settings-panel .content #input-width`).val();
          let height = $(`${this.containerSelector} .toolpanel#settings-panel .content #input-height`).val();
          _self.canvas.setWidth(width)
          _self.canvas.originalW = width
          _self.canvas.setHeight(height)
          _self.canvas.originalH = height
          _self.canvas.renderAll()
          _self.canvas.trigger('object:modified')
        } catch (_) {}
      }

      $(`${this.containerSelector} .toolpanel#settings-panel .content #input-width`).change(setDimension)
      $(`${this.containerSelector} .toolpanel#settings-panel .content #input-height`).change(setDimension)
    })();
    // end set dimension section
  }

  window.ImageEditor.prototype.initializeCanvasSettingPanel = canvasSettings;
})()
