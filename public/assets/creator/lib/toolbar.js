/**
 * Initialize toolbar
 */
(function () {
  'use strict';
  var defaultButtons = [{
    name: 'select',
    alt: 'select',
    title: 'Select/move object (V)',
    icon: `<svg id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve"><g><g><path d="M423.547,323.115l-320-320c-3.051-3.051-7.637-3.947-11.627-2.304s-6.592,5.547-6.592,9.856V480 c0,4.501,2.837,8.533,7.083,10.048c4.224,1.536,8.981,0.192,11.84-3.285l85.205-104.128l56.853,123.179 c1.792,3.883,5.653,6.187,9.685,6.187c1.408,0,2.837-0.277,4.203-0.875l74.667-32c2.645-1.131,4.736-3.285,5.76-5.973 c1.024-2.688,0.939-5.675-0.277-8.299l-57.024-123.52h132.672c4.309,0,8.213-2.603,9.856-6.592 C427.515,330.752,426.598,326.187,423.547,323.115z"></path></g></g></svg>`
  }, {
    name: 'upload',
    alt: 'upload',
    title: 'Upload image',
    icon: `<svg id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve"><path d="M412.907,214.08C398.4,140.693,333.653,85.333,256,85.333c-61.653,0-115.093,34.987-141.867,86.08 C50.027,178.347,0,232.64,0,298.667c0,70.72,57.28,128,128,128h277.333C464.213,426.667,512,378.88,512,320 C512,263.68,468.16,218.027,412.907,214.08z M298.667,277.333v85.333h-85.333v-85.333h-64L256,170.667l106.667,106.667H298.667z"></path></svg>`
    // icon: `<svg width="16" height="16" fill="currentColor" class="bi bi-intersect" viewBox="0 0 16 16"><path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm5 10v2a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1h-2v5a2 2 0 0 1-2 2H5zm6-8V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h2V6a2 2 0 0 1 2-2h5z"/></svg>`
  }, {
    name: 'media',
    alt: 'media',
    title: 'Media',
    icon: `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera" viewBox="0 0 16 16"><path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"/><path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/></svg>`
    // icon: `<svg id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve"><path d="M412.907,214.08C398.4,140.693,333.653,85.333,256,85.333c-61.653,0-115.093,34.987-141.867,86.08 C50.027,178.347,0,232.64,0,298.667c0,70.72,57.28,128,128,128h277.333C464.213,426.667,512,378.88,512,320 C512,263.68,468.16,218.027,412.907,214.08z M298.667,277.333v85.333h-85.333v-85.333h-64L256,170.667l106.667,106.667H298.667z"></path></svg>`
  }, {
    name: 'background',
    alt: 'bkgrnd',
    title: 'Canvas background',
    icon: `<svg width="16" height="16" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16"><path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/><path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/></svg>`
  }, {
    name: 'shapes',
    alt: 'shapes',
    title: 'Shapes',
    icon: `<svg id="Capa_1" x="0px" y="0px" viewBox="0 0 490.927 490.927" xml:space="preserve"><path d="M336.738,178.502c-12.645,0-24.852,1.693-36.627,4.582L202.57,11.786c-5.869-10.321-22.84-10.321-28.709,0L2.163,313.311 c-2.906,5.105-2.889,11.385,0.078,16.466c2.953,5.088,8.389,8.216,14.275,8.216l166.314,0.009 c2.818,82.551,70.688,148.88,153.906,148.88c85.012,0,154.19-69.167,154.19-154.186S421.749,178.502,336.738,178.502z  M44.917,304.964l143.299-251.63L331.515,304.97L44.917,304.964z"></path></svg>`
  }, {
    name: 'objectAnimation',
    alt: 'animate',
    title: 'Animations',
    icon: `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16"><path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/><path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/></svg>`
  }, {
    name: 'draw',
    alt: 'draw',
    title: 'Free draw',
    icon: `<svg height="512pt" viewBox="0 -3 512 512" width="512pt"><g id="surface1"><path d="M 497.171875 86.429688 C 506.734375 76.867188 512 64.152344 512 50.628906 C 512 37.105469 506.734375 24.390625 497.171875 14.828125 C 487.609375 5.265625 474.894531 0 461.371094 0 C 447.847656 0 435.132812 5.265625 425.570312 14.828125 L 198.296875 242.105469 L 269.894531 313.703125 Z M 497.171875 86.429688 " style="stroke: none; fill-rule: nonzero; fill: rgb(0, 0, 0); fill-opacity: 1;"></path><path d="M 65.839844 506.65625 C 92.171875 507.21875 130.371094 496.695312 162.925781 459.074219 C 164.984375 456.691406 166.894531 454.285156 168.664062 451.855469 C 179.460938 435.875 184.695312 418.210938 183.855469 400.152344 C 182.945312 380.5625 174.992188 362.324219 161.460938 348.796875 C 150.28125 337.613281 134.722656 331.457031 117.648438 331.457031 C 95.800781 331.457031 73.429688 341.296875 56.277344 358.449219 C 31.574219 383.152344 31.789062 404.234375 31.976562 422.839844 C 32.15625 440.921875 32.316406 456.539062 11.101562 480.644531 L 0 493.257812 C 0 493.257812 26.828125 505.820312 65.839844 506.65625 Z M 65.839844 506.65625 " style="stroke: none; fill-rule: nonzero; fill: rgb(0, 0, 0); fill-opacity: 1;"></path><path d="M 209.980469 373.621094 L 248.496094 335.101562 L 176.894531 263.503906 L 137.238281 303.160156 C 154.691406 306.710938 170.464844 315 182.859375 327.394531 C 195.746094 340.285156 205.003906 356.1875 209.980469 373.621094 Z M 209.980469 373.621094 " style="stroke: none; fill-rule: nonzero; fill: rgb(0, 0, 0); fill-opacity: 1;"></path></g></svg>`
  }, {
    name: 'line',
    alt: 'line',
    title: 'Line',
    icon: `<svg id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve"><path d="M349.091,0v124.516L124.516,349.091H0V512h162.909V387.484l224.574-224.574H512V0H349.091z M54.303,457.696v-54.303 h54.303v54.303H54.303z M457.696,108.605h-54.303V54.303h54.303V108.605z"></path></svg>`
  }, {
    name: 'path',
    alt: 'path',
    title: 'Connectable lines & curves',
    icon: '<svg id="svg8" viewBox="28 55 140 140"><path d="m 28.386086,150.01543 v 43.10301 H 71.489092 V 178.7505 H 120.75466 V 164.38283 H 71.355237 L 71.488872,150.0086 H 57.121421 c 0,-49.247 14.367449,-63.614929 63.633239,-63.614929 v -14.36768 c -63.633239,0 -78.000906,28.735609 -78.000906,77.982609 l -14.367888,0.007 z m 14.367669,28.73507 v -14.36767 h 14.367668 v 14.36767 z" id="path840" style="stroke-width: 0.264583;"></path><path d="m 120.74975,150.00843 v 43.10301 h 43.10301 V 150.0016 l -43.10301,0.007 z m 14.36767,28.73507 v -14.36767 h 14.36767 v 14.36767 z" id="path840-1" style="stroke-width: 0.264583;"></path><path d="m 120.74975,57.658601 v 43.103009 h 43.10301 V 57.651771 l -43.10301,0.007 z m 14.36767,28.73507 v -14.36767 h 14.36767 v 14.36767 z" id="path840-1-0" style="stroke-width: 0.264583;"></path></svg>'
  }, {
    name: 'textbox',
    alt: 'textbox',
    title: 'Text box',
    icon: `<svg id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve"><g><g><path d="M497,90c8.291,0,15-6.709,15-15V15c0-8.291-6.709-15-15-15h-60c-8.291,0-15,6.709-15,15v15H90V15c0-8.401-6.599-15-15-15 H15C6.599,0,0,6.599,0,15v60c0,8.399,6.599,15,15,15h15v332H15c-8.291,0-15,6.709-15,15v60c0,8.291,6.709,15,15,15h60 c8.291,0,15-6.709,15-15v-15h332v15c0,8.399,6.599,15,15,15h60c8.401,0,15-6.601,15-15v-60c0-8.401-6.599-15-15-15h-15V90H497z  M452,422h-15c-8.401,0-15,6.599-15,15v15H90v-15c0-8.291-6.709-15-15-15H60V90h15c8.401,0,15-6.601,15-15V60h332v15 c0,8.291,6.709,15,15,15h15V422z"></path></g></g><g><g><path d="M361,105H151c-8.291,0-15,6.709-15,15v60c0,6.064,3.647,11.543,9.258,13.857c5.625,2.329,12.056,1.04,16.348-3.252 L187.211,165H226v176.459l-27.48,42.221c-3.062,4.6-3.354,10.518-0.747,15.396S205.463,407,211,407h90 c5.537,0,10.62-3.047,13.228-7.925c2.608-4.878,2.314-10.796-0.747-15.396L286,341.459V165h38.789l25.605,25.605 c4.307,4.307,10.781,5.596,16.348,3.252c5.61-2.314,9.258-7.793,9.258-13.857v-60C376,111.709,369.291,105,361,105z"></path></g></g></svg>`
  }, {
    name: 'settings',
    alt: 'settings',
    title: 'Canvas option',
    icon: `<svg height="512pt" viewBox="0 0 512 512" width="512pt"><path d="m499.953125 197.703125-39.351563-8.554687c-3.421874-10.476563-7.660156-20.695313-12.664062-30.539063l21.785156-33.886719c3.890625-6.054687 3.035156-14.003906-2.050781-19.089844l-61.304687-61.304687c-5.085938-5.085937-13.035157-5.941406-19.089844-2.050781l-33.886719 21.785156c-9.84375-5.003906-20.0625-9.242188-30.539063-12.664062l-8.554687-39.351563c-1.527344-7.03125-7.753906-12.046875-14.949219-12.046875h-86.695312c-7.195313 0-13.421875 5.015625-14.949219 12.046875l-8.554687 39.351563c-10.476563 3.421874-20.695313 7.660156-30.539063 12.664062l-33.886719-21.785156c-6.054687-3.890625-14.003906-3.035156-19.089844 2.050781l-61.304687 61.304687c-5.085937 5.085938-5.941406 13.035157-2.050781 19.089844l21.785156 33.886719c-5.003906 9.84375-9.242188 20.0625-12.664062 30.539063l-39.351563 8.554687c-7.03125 1.53125-12.046875 7.753906-12.046875 14.949219v86.695312c0 7.195313 5.015625 13.417969 12.046875 14.949219l39.351563 8.554687c3.421874 10.476563 7.660156 20.695313 12.664062 30.539063l-21.785156 33.886719c-3.890625 6.054687-3.035156 14.003906 2.050781 19.089844l61.304687 61.304687c5.085938 5.085937 13.035157 5.941406 19.089844 2.050781l33.886719-21.785156c9.84375 5.003906 20.0625 9.242188 30.539063 12.664062l8.554687 39.351563c1.527344 7.03125 7.753906 12.046875 14.949219 12.046875h86.695312c7.195313 0 13.421875-5.015625 14.949219-12.046875l8.554687-39.351563c10.476563-3.421874 20.695313-7.660156 30.539063-12.664062l33.886719 21.785156c6.054687 3.890625 14.003906 3.039063 19.089844-2.050781l61.304687-61.304687c5.085937-5.085938 5.941406-13.035157 2.050781-19.089844l-21.785156-33.886719c5.003906-9.84375 9.242188-20.0625 12.664062-30.539063l39.351563-8.554687c7.03125-1.53125 12.046875-7.753906 12.046875-14.949219v-86.695312c0-7.195313-5.015625-13.417969-12.046875-14.949219zm-152.160156 58.296875c0 50.613281-41.179688 91.792969-91.792969 91.792969s-91.792969-41.179688-91.792969-91.792969 41.179688-91.792969 91.792969-91.792969 91.792969 41.179688 91.792969 91.792969zm0 0"></path></svg>`
  }]

  const defaultExtendedButtons = [{
    name: 'undo',
    alt: 'undo',
    title: 'Undo',
    icon: `<svg width="16" height="16" fill="currentColor" class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z"/><path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z"/></svg>`
  }, {
    name: 'redo',
    alt: 'redo',
    title: 'Redo',
    icon: `<svg width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/><path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/></svg>`
  }, {
    name: 'save',
    alt: 'save',
    title: 'Save',
    icon: `<svg width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16"><path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/></svg>`
  }, {
    name: 'download',
    alt: 'download',
    title: 'Download',
    icon: `<svg width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16"><path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/><path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/></svg>`
  }, {
    name: 'clear',
    alt: 'clear',
    title: 'Clear',
    icon: `<svg width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16"><path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/></svg>`
  }]

  var toolbar = function () {
    const _self = this;
    let buttons = [];
    let extendedButtons = [];
    if (Array.isArray(this.buttons) && this.buttons.length) {
      defaultButtons.forEach(item => {
        if (this.buttons.includes(item.name)) buttons.push(item);
      });
      defaultExtendedButtons.forEach(item => {
        if (this.buttons.includes(item.name)) extendedButtons.push(item);
      })
    } else {
      buttons = defaultButtons;
      extendedButtons = defaultExtendedButtons;
    }

    //
    try {
      this.containerEl.append(`<div class="toolbar" id="toolbar"><div class="main-buttons"></div><div class="extended-buttons"></div></div>`);

      // main buttons
      (() => {
        buttons.forEach(item => {
          $(`${this.containerSelector} #toolbar .main-buttons`).append(`<button title="${item.title}" id="${item.name}" class="${(item.name == 'media') ? 'active' : ''}">
          <span class="d-flex flex-column justify-content-center align-items-center">
          <small class="">${item.icon}</small>
          <small class="small app-text-gray-600 mt-2">${item.alt}</small>
          </span>
          </button>`);
        })

        $(`${this.containerSelector} #toolbar .main-buttons button`).click(function () {
          let id = $(this).attr('id');

          $(`${_self.containerSelector} #toolbar button`).removeClass('active');
          $(`${_self.containerSelector} #toolbar button#${id}`).addClass('active');
          _self.setActiveTool(id);
        })
      })();

      // zoom
      (() => {
        let currentZoomLevel = 0.75;
        $(`${this.containerSelector}`).append(
          `<div class="floating-zoom-level-container"></div>`
        )
        $(`${this.containerSelector} .floating-zoom-level-container`).append(`
          <label>Zoom</label>
          <select id="input-zoom-level">
          ${[0.05, 0.1, 0.25, 0.5, 0.75, 1, 1.5, 2, 2.5, 3].map((item =>
          `<option value="${item}" ${item === currentZoomLevel ? 'selected' : ''}>${item * 100}%</option>`
        ))}
          </select>
          `);
        $(`${this.containerSelector} .floating-zoom-level-container #input-zoom-level`).change(function () {
          let zoom = parseFloat($(this).val());
          typeof _self.applyZoom === 'function' && _self.applyZoom(zoom)
        })
      })();
      // extended buttons
      (() => {
        extendedButtons.forEach(item => {
          $(`${this.containerSelector} #toolbar .extended-buttons`).append(`<button title="${item.title}" id="${item.name}">${item.icon}</button>`);
        })

        $(`${this.containerSelector} #toolbar .extended-buttons button`).click(function () {
          let id = $(this).attr('id');
          if (id === 'save') {
            if (window.confirm('The current canvas will be saved in your local! Are you sure?')) {
              saveInBrowser.save('canvasEditor', _self.canvas.toJSON());
            }
          } else if (id === 'clear') {
            if (window.confirm('This will clear the canvas! Are you sure?')) {
              _self.canvas.clear(), saveInBrowser.remove('canvasEditor');
            }
          } else if (id === 'download') {
            $('body').append(`<div class="custom-modal-container">
            <div class="custom-modal-content">
            <div class="button-download" id="svg">Download as SVG</div>
            <div class="button-download" id="png">Download as PNG</div>
            <div class="button-download" id="jpg">Download as JPG</div>
            <div class="button-download" id="json">Save as Template</div>
            <a class="d-none" id="saveJson" download="data.json">save json</a>
              </div>
              </div>`)

            $(".custom-modal-container").click(function () {
              $(this).remove();
            })

            $(".custom-modal-container .button-download").click(function (e) {
              let type = $(this).attr('id');
              if (type === 'svg') downloadSVG(_self.canvas.toSVG());
              else if (type === 'png') downloadImage(_self.canvas.toDataURL({
                width: parseInt($('#input-width').val()),
                height: parseInt($('#input-height').val()),
                multiplier: 1
              }))
              else if (type === 'jpg') downloadImage(_self.canvas.toDataURL({
                format: 'jpeg',
                width: parseInt($('#input-width').val()),
                height: parseInt($('#input-height').val()),
                multiplier: 1
              }), 'jpg', 'image/jpeg');
              else if (type === 'json') {
                var myModal = new bootstrap.Modal(document.getElementById('templateTagModal'), {});
                var modalToggle = document.getElementById('templateTagModal') // relatedTarget
                myModal.show(modalToggle);
                // var dataStr = "data:text/json;charset=utf-8," + encodeURIComponent(stringifyCanvas(_self.canvas));
                // var dlAnchorElem = document.getElementById('saveJson');
                // dlAnchorElem.setAttribute("href", dataStr);
                // dlAnchorElem.setAttribute("download", "data.json");
                // dlAnchorElem.click();
              }
            })

            $('form[name=template_tags_form]').on('submit', function (e) {
              e.preventDefault();

              let btnClicked = $('#save_template');
              btnClicked.attr('disabled', 'true');
              btnClicked.html(`<div class="spinner-border spinner-border-sm" role="status">
                                  <span class="visually-hidden">Loading...</span>
                              </div>
                              <span class="">Saving Template...</span>`
              );


              let canvasString = "data:text/json;charset=utf-8," + encodeURIComponent(stringifyCanvas(_self.canvas));
              let canvasImage = _self.canvas.toDataURL({ multiplier: 8 });
              let templateTags = $("#template_tags").val();

              // SAVE MY DESIGN


              let width = parseInt($('#input-width').val());
              let height = parseInt($('#input-height').val());
              let dimensions = width + 'x' + height;

              // templates.save(templateTags, canvasString, canvasImage, dimensions);
              templates.saveAsTemplate(templateTags, canvasString, canvasImage, dimensions);

            });

          } else if (id === 'undo') _self.undo();
          else if (id === 'redo') _self.redo();
        })
      })()
    } catch (_) {
      console.error("can't create toolbar");
    }
  }

  window.ImageEditor.prototype.initializeToolbar = toolbar;
})();

// Canvas to json file
const stringifyCanvas = (jsonData) => {
  //array of the attributes not saved by default that I want to save
  var additionalFields = ['selectable', 'uid', 'custom'];

  sCanvas = JSON.stringify(jsonData);
  oCanvas = JSON.parse(sCanvas);
  $.each(oCanvas.objects, function (n, object) {
    $.each(additionalFields, function (m, field) {
      oCanvas.objects[n][field] = jsonData.item(n)[field];
    });
  });
  return JSON.stringify(oCanvas);
}
