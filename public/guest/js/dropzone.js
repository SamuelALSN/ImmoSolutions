(function () {
    var a, b, c, d, e, f, g, h, i = [].slice, j = {}.hasOwnProperty, k = function (a, b) {
        function d() {
            this.constructor = a
        }

        for (var c in b) j.call(b, c) && (a[c] = b[c]);
        return d.prototype = b.prototype, a.prototype = new d, a.__super__ = b.prototype, a
    };
    g = function () {
    }, b = function () {
        function a() {
        }

        return a.prototype.addEventListener = a.prototype.on, a.prototype.on = function (a, b) {
            return this._callbacks = this._callbacks || {}, this._callbacks[a] || (this._callbacks[a] = []), this._callbacks[a].push(b), this
        }, a.prototype.emit = function () {
            var a, b, c, d, e, f;
            if (d = arguments[0], a = 2 <= arguments.length ? i.call(arguments, 1) : [], this._callbacks = this._callbacks || {}, c = this._callbacks[d]) for (e = 0, f = c.length; e < f; e++) b = c[e], b.apply(this, a);
            return this
        }, a.prototype.removeListener = a.prototype.off, a.prototype.removeAllListeners = a.prototype.off, a.prototype.removeEventListener = a.prototype.off, a.prototype.off = function (a, b) {
            var c, d, e, f, g;
            if (!this._callbacks || 0 === arguments.length) return this._callbacks = {}, this;
            if (d = this._callbacks[a], !d) return this;
            if (1 === arguments.length) return delete this._callbacks[a], this;
            for (e = f = 0, g = d.length; f < g; e = ++f) if (c = d[e], c === b) {
                d.splice(e, 1);
                break
            }
            return this
        }, a
    }(), a = function (a) {
        function e(a, b) {
            var d, f, g;
            if (this.element = a, this.version = e.version, this.defaultOptions.previewTemplate = this.defaultOptions.previewTemplate.replace(/\n*/g, ""), this.clickableElements = [], this.listeners = [], this.files = [], "string" == typeof this.element && (this.element = document.querySelector(this.element)), !this.element || null == this.element.nodeType) throw new Error("Invalid dropzone element.");
            if (this.element.dropzone) {
                return this.element.dropzone;
            }
            ;
            if (e.instances.push(this), this.element.dropzone = this, d = null != (g = e.optionsForElement(this.element)) ? g : {}, this.options = c({}, this.defaultOptions, d, null != b ? b : {}), this.options.forceFallback || !e.isBrowserSupported()) return this.options.fallback.call(this);
            if (null == this.options.url && (this.options.url = this.element.getAttribute("action")), !this.options.url) throw new Error("No URL provided.");
            if (this.options.acceptedFiles && this.options.acceptedMimeTypes) throw new Error("You can't provide both 'acceptedFiles' and 'acceptedMimeTypes'. 'acceptedMimeTypes' is deprecated.");
            this.options.acceptedMimeTypes && (this.options.acceptedFiles = this.options.acceptedMimeTypes, delete this.options.acceptedMimeTypes), this.options.method = this.options.method.toUpperCase(), (f = this.getExistingFallback()) && f.parentNode && f.parentNode.removeChild(f), this.options.previewsContainer !== !1 && (this.options.previewsContainer ? this.previewsContainer = e.getElement(this.options.previewsContainer, "previewsContainer") : this.previewsContainer = this.element), this.options.clickable && (this.options.clickable === !0 ? this.clickableElements = [this.element] : this.clickableElements = e.getElements(this.options.clickable, "clickable")), this.init()
        }

        var c, d;
        return k(e, a), e.prototype.Emitter = b, e.prototype.events = ["drop", "dragstart", "dragend", "dragenter", "dragover", "dragleave", "addedfile", "addedfiles", "removedfile", "thumbnail", "error", "errormultiple", "processing", "processingmultiple", "uploadprogress", "totaluploadprogress", "sending", "sendingmultiple", "success", "successmultiple", "canceled", "canceledmultiple", "complete", "completemultiple", "reset", "maxfilesexceeded", "maxfilesreached", "queuecomplete"], e.prototype.defaultOptions = {
            url: null,
            method: "post",
            withCredentials: !1,
            parallelUploads: 2,
            uploadMultiple: !1,
            maxFilesize: 256,
            paramName: "file",
            createImageThumbnails: !0,
            maxThumbnailFilesize: 10,
            thumbnailWidth: 120,
            thumbnailHeight: 120,
            filesizeBase: 1e3,
            maxFiles: null,
            params: {},
            clickable: !0,
            ignoreHiddenFiles: !0,
            acceptedFiles: null,
            acceptedMimeTypes: null,
            autoProcessQueue: !0,
            autoQueue: !0,
            addRemoveLinks: !1,
            previewsContainer: null,
            hiddenInputContainer: "body",
            capture: null,
            renameFilename: null,
            dictDefaultMessage: "Drop files here to upload",
            dictFallbackMessage: "Your browser does not support drag'n'drop file uploads.",
            dictFallbackText: "Please use the fallback form below to upload your files like in the olden days.",
            dictFileTooBig: "File is too big ({{filesize}}MiB). Max filesize: {{maxFilesize}}MiB.",
            dictInvalidFileType: "You can't upload files of this type.",
            dictResponseError: "Server responded with {{statusCode}} code.",
            dictCancelUpload: "Cancel upload",
            dictCancelUploadConfirmation: "Are you sure you want to cancel this upload?",
            dictRemoveFile: "Remove file",
            dictRemoveFileConfirmation: null,
            dictMaxFilesExceeded: "You can not upload any more files.",
            accept: function (a, b) {
                return b()
            },
            init: function () {
                return g
            },
            forceFallback: !1,
            fallback: function () {
                var a, b, c, d, f, g;
                for (this.element.className = "" + this.element.className + " dz-browser-not-supported", g = this.element.getElementsByTagName("div"), d = 0, f = g.length; d < f; d++) a = g[d], /(^| )dz-message($| )/.test(a.className) && (b = a, a.className = "dz-message");
                return b || (b = e.createElement('<div class="dz-message"><span></span></div>'), this.element.appendChild(b)), c = b.getElementsByTagName("span")[0], c && (null != c.textContent ? c.textContent = this.options.dictFallbackMessage : null != c.innerText && (c.innerText = this.options.dictFallbackMessage)), this.element.appendChild(this.getFallbackForm())
            },
            resize: function (a) {
                var b, c, d;
                return b = {
                    srcX: 0,
                    srcY: 0,
                    srcWidth: a.width,
                    srcHeight: a.height
                }, c = a.width / a.height, b.optWidth = this.options.thumbnailWidth, b.optHeight = this.options.thumbnailHeight, null == b.optWidth && null == b.optHeight ? (b.optWidth = b.srcWidth, b.optHeight = b.srcHeight) : null == b.optWidth ? b.optWidth = c * b.optHeight : null == b.optHeight && (b.optHeight = 1 / c * b.optWidth), d = b.optWidth / b.optHeight, a.height < b.optHeight || a.width < b.optWidth ? (b.trgHeight = b.srcHeight, b.trgWidth = b.srcWidth) : c > d ? (b.srcHeight = a.height, b.srcWidth = b.srcHeight * d) : (b.srcWidth = a.width, b.srcHeight = b.srcWidth / d), b.srcX = (a.width - b.srcWidth) / 2, b.srcY = (a.height - b.srcHeight) / 2, b
            },
            drop: function (a) {
                return this.element.classList.remove("dz-drag-hover")
            },
            dragstart: g,
            dragend: function (a) {
                return this.element.classList.remove("dz-drag-hover")
            },
            dragenter: function (a) {
                return this.element.classList.add("dz-drag-hover")
            },
            dragover: function (a) {
                return this.element.classList.add("dz-drag-hover")
            },
            dragleave: function (a) {
                return this.element.classList.remove("dz-drag-hover")
            },
            paste: g,
            reset: function () {
                return this.element.classList.remove("dz-started")
            },
            addedfile: function (a) {
                var b, c, d, f, g, h, i, j, k, l, m, n, o;
                if (this.element === this.previewsContainer && this.element.classList.add("dz-started"), this.previewsContainer) {
                    for (a.previewElement = e.createElement(this.options.previewTemplate.trim()), a.previewTemplate = a.previewElement, this.previewsContainer.appendChild(a.previewElement), l = a.previewElement.querySelectorAll("[data-dz-name]"), f = 0, i = l.length; f < i; f++) b = l[f], b.textContent = this._renameFilename(a.name);
                    for (m = a.previewElement.querySelectorAll("[data-dz-size]"), g = 0, j = m.length; g < j; g++) b = m[g], b.innerHTML = this.filesize(a.size);
                    for (this.options.addRemoveLinks && (a._removeLink = e.createElement('<a class="dz-remove" href="javascript:undefined;" data-dz-remove>' + this.options.dictRemoveFile + "</a>"), a.previewElement.appendChild(a._removeLink)), c = function (b) {
                        return function (c) {
                            return c.preventDefault(), c.stopPropagation(), a.status === e.UPLOADING ? e.confirm(b.options.dictCancelUploadConfirmation, function () {
                                return b.removeFile(a)
                            }) : b.options.dictRemoveFileConfirmation ? e.confirm(b.options.dictRemoveFileConfirmation, function () {
                                return b.removeFile(a)
                            }) : b.removeFile(a)
                        }
                    }(this), n = a.previewElement.querySelectorAll("[data-dz-remove]"), o = [], h = 0, k = n.length; h < k; h++) d = n[h], o.push(d.addEventListener("click", c));
                    return o
                }
            },
            removedfile: function (a) {
                var b;
                return a.previewElement && null != (b = a.previewElement) && b.parentNode.removeChild(a.previewElement), this._updateMaxFilesReachedClass()
            },
            thumbnail: function (a, b) {
                var c, d, e, f;
                if (a.previewElement) {
                    for (a.previewElement.classList.remove("dz-file-preview"), f = a.previewElement.querySelectorAll("[data-dz-thumbnail]"), d = 0, e = f.length; d < e; d++) c = f[d], c.alt = a.name, c.src = b;
                    return setTimeout(function (b) {
                        return function () {
                            return a.previewElement.classList.add("dz-image-preview")
                        }
                    }(this), 1)
                }
            },
            error: function (a, b) {
                var c, d, e, f, g;
                if (a.previewElement) {
                    for (a.previewElement.classList.add("dz-error"), "String" != typeof b && b.error && (b = b.error), f = a.previewElement.querySelectorAll("[data-dz-errormessage]"), g = [], d = 0, e = f.length; d < e; d++) c = f[d], g.push(c.textContent = b);
                    return g
                }
            },
            errormultiple: g,
            processing: function (a) {
                if (a.previewElement && (a.previewElement.classList.add("dz-processing"), a._removeLink)) return a._removeLink.textContent = this.options.dictCancelUpload
            },
            processingmultiple: g,
            uploadprogress: function (a, b, c) {
                var d, e, f, g, h;
                if (a.previewElement) {
                    for (g = a.previewElement.querySelectorAll("[data-dz-uploadprogress]"), h = [], e = 0, f = g.length; e < f; e++) d = g[e], "PROGRESS" === d.nodeName ? h.push(d.value = b) : h.push(d.style.width = "" + b + "%");
                    return h
                }
            },
            totaluploadprogress: g,
            sending: g,
            sendingmultiple: g,
            success: function (a) {
                if (a.previewElement) return a.previewElement.classList.add("dz-success")
            },
            successmultiple: g,
            canceled: function (a) {
                return this.emit("error", a, "Upload canceled.")
            },
            canceledmultiple: g,
            complete: function (a) {
                if (a._removeLink && (a._removeLink.textContent = this.options.dictRemoveFile), a.previewElement) return a.previewElement.classList.add("dz-complete")
            },
            completemultiple: g,
            maxfilesexceeded: g,
            maxfilesreached: g,
            queuecomplete: g,
            addedfiles: g,
            previewTemplate: '<div class="dz-preview dz-file-preview">\n  <div class="dz-image"><img data-dz-thumbnail /></div>\n  <div class="dz-details">\n    <div class="dz-size"><span data-dz-size></span></div>\n    <div class="dz-filename"><span data-dz-name></span></div>\n  </div>\n  <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>\n  <div class="dz-error-message"><span data-dz-errormessage></span></div>\n  <div class="dz-success-mark">\n    <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">\n      <title>Check</title>\n      <defs></defs>\n      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">\n        <path d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" stroke-opacity="0.198794158" stroke="#747474" fill-opacity="0.816519475" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>\n      </g>\n    </svg>\n  </div>\n  <div class="dz-error-mark">\n    <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">\n      <title>Error</title>\n      <defs></defs>\n      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">\n        <g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474" stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475">\n          <path d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" sketch:type="MSShapeGroup"></path>\n        </g>\n      </g>\n    </svg>\n  </div>\n</div>'
        }, c = function () {
            var a, b, c, d, e, f, g;
            for (d = arguments[0], c = 2 <= arguments.length ? i.call(arguments, 1) : [], f = 0, g = c.length; f < g; f++) {
                b = c[f];
                for (a in b) e = b[a], d[a] = e
            }
            return d
        }, e.prototype.getAcceptedFiles = function () {
            var a, b, c, d, e;
            for (d = this.files, e = [], b = 0, c = d.length; b < c; b++) a = d[b], a.accepted && e.push(a);
            return e
        }, e.prototype.getRejectedFiles = function () {
            var a, b, c, d, e;
            for (d = this.files, e = [], b = 0, c = d.length; b < c; b++) a = d[b], a.accepted || e.push(a);
            return e
        }, e.prototype.getFilesWithStatus = function (a) {
            var b, c, d, e, f;
            for (e = this.files, f = [], c = 0, d = e.length; c < d; c++) b = e[c], b.status === a && f.push(b);
            return f
        }, e.prototype.getQueuedFiles = function () {
            return this.getFilesWithStatus(e.QUEUED)
        }, e.prototype.getUploadingFiles = function () {
            return this.getFilesWithStatus(e.UPLOADING)
        }, e.prototype.getAddedFiles = function () {
            return this.getFilesWithStatus(e.ADDED)
        }, e.prototype.getActiveFiles = function () {
            var a, b, c, d, f;
            for (d = this.files, f = [], b = 0, c = d.length; b < c; b++) a = d[b], a.status !== e.UPLOADING && a.status !== e.QUEUED || f.push(a);
            return f
        }, e.prototype.init = function () {
            var a, b, c, d, f, g, h;
            for ("form" === this.element.tagName && this.element.setAttribute("enctype", "multipart/form-data"), this.element.classList.contains("dropzone") && !this.element.querySelector(".dz-message") && this.element.appendChild(e.createElement('<div class="dz-default dz-message"><span>' + this.options.dictDefaultMessage + "</span></div>")), this.clickableElements.length && (c = function (a) {
                return function () {
                    return a.hiddenFileInput && a.hiddenFileInput.parentNode.removeChild(a.hiddenFileInput), a.hiddenFileInput = document.createElement("input"), a.hiddenFileInput.setAttribute("type", "file"), (null == a.options.maxFiles || a.options.maxFiles > 1) && a.hiddenFileInput.setAttribute("multiple", "multiple"), a.hiddenFileInput.className = "dz-hidden-input", null != a.options.acceptedFiles && a.hiddenFileInput.setAttribute("accept", a.options.acceptedFiles), null != a.options.capture && a.hiddenFileInput.setAttribute("capture", a.options.capture), a.hiddenFileInput.style.visibility = "hidden", a.hiddenFileInput.style.position = "absolute", a.hiddenFileInput.style.top = "0", a.hiddenFileInput.style.left = "0", a.hiddenFileInput.style.height = "0", a.hiddenFileInput.style.width = "0", document.querySelector(a.options.hiddenInputContainer).appendChild(a.hiddenFileInput), a.hiddenFileInput.addEventListener("change", function () {
                        var b, d, e, f;
                        if (d = a.hiddenFileInput.files, d.length) for (e = 0, f = d.length; e < f; e++) b = d[e], a.addFile(b);
                        return a.emit("addedfiles", d), c()
                    })
                }
            }(this))(), this.URL = null != (g = window.URL) ? g : window.webkitURL, h = this.events, d = 0, f = h.length; d < f; d++) a = h[d], this.on(a, this.options[a]);
            return this.on("uploadprogress", function (a) {
                return function () {
                    return a.updateTotalUploadProgress()
                }
            }(this)), this.on("removedfile", function (a) {
                return function () {
                    return a.updateTotalUploadProgress()
                }
            }(this)), this.on("canceled", function (a) {
                return function (b) {
                    return a.emit("complete", b)
                }
            }(this)), this.on("complete", function (a) {
                return function (b) {
                    if (0 === a.getAddedFiles().length && 0 === a.getUploadingFiles().length && 0 === a.getQueuedFiles().length) return setTimeout(function () {
                        return a.emit("queuecomplete")
                    }, 0)
                }
            }(this)), b = function (a) {
                return a.stopPropagation(), a.preventDefault ? a.preventDefault() : a.returnValue = !1
            }, this.listeners = [{
                element: this.element, events: {
                    dragstart: function (a) {
                        return function (b) {
                            return a.emit("dragstart", b)
                        }
                    }(this), dragenter: function (a) {
                        return function (c) {
                            return b(c), a.emit("dragenter", c)
                        }
                    }(this), dragover: function (a) {
                        return function (c) {
                            var d;
                            try {
                                d = c.dataTransfer.effectAllowed
                            } catch (a) {
                            }
                            return c.dataTransfer.dropEffect = "move" === d || "linkMove" === d ? "move" : "copy", b(c), a.emit("dragover", c)
                        }
                    }(this), dragleave: function (a) {
                        return function (b) {
                            return a.emit("dragleave", b)
                        }
                    }(this), drop: function (a) {
                        return function (c) {
                            return b(c), a.drop(c)
                        }
                    }(this), dragend: function (a) {
                        return function (b) {
                            return a.emit("dragend", b)
                        }
                    }(this)
                }
            }], this.clickableElements.forEach(function (a) {
                return function (b) {
                    return a.listeners.push({
                        element: b, events: {
                            click: function (c) {
                                return (b !== a.element || c.target === a.element || e.elementInside(c.target, a.element.querySelector(".dz-message"))) && a.hiddenFileInput.click(), !0
                            }
                        }
                    })
                }
            }(this)), this.enable(), this.options.init.call(this)
        }, e.prototype.destroy = function () {
            var a;
            return this.disable(), this.removeAllFiles(!0), (null != (a = this.hiddenFileInput) ? a.parentNode : void 0) && (this.hiddenFileInput.parentNode.removeChild(this.hiddenFileInput), this.hiddenFileInput = null), delete this.element.dropzone, e.instances.splice(e.instances.indexOf(this), 1)
        }, e.prototype.updateTotalUploadProgress = function () {
            var a, b, c, d, e, f, g, h;
            if (d = 0, c = 0, a = this.getActiveFiles(), a.length) {
                for (h = this.getActiveFiles(), f = 0, g = h.length; f < g; f++) b = h[f], d += b.upload.bytesSent, c += b.upload.total;
                e = 100 * d / c
            } else e = 100;
            return this.emit("totaluploadprogress", e, c, d)
        }, e.prototype._getParamName = function (a) {
            return "function" == typeof this.options.paramName ? this.options.paramName(a) : "" + this.options.paramName + (this.options.uploadMultiple ? "[" + a + "]" : "")
        }, e.prototype._renameFilename = function (a) {
            return "function" != typeof this.options.renameFilename ? a : this.options.renameFilename(a)
        }, e.prototype.getFallbackForm = function () {
            var a, b, c, d;
            return (a = this.getExistingFallback()) ? a : (c = '<div class="dz-fallback">', this.options.dictFallbackText && (c += "<p>" + this.options.dictFallbackText + "</p>"), c += '<input type="file" name="' + this._getParamName(0) + '" ' + (this.options.uploadMultiple ? 'multiple="multiple"' : void 0) + ' /><input type="submit" value="Upload!"></div>', b = e.createElement(c), "FORM" !== this.element.tagName ? (d = e.createElement('<form action="' + this.options.url + '" enctype="multipart/form-data" method="' + this.options.method + '"></form>'), d.appendChild(b)) : (this.element.setAttribute("enctype", "multipart/form-data"), this.element.setAttribute("method", this.options.method)), null != d ? d : b)
        }, e.prototype.getExistingFallback = function () {
            var a, b, c, d, e, f;
            for (b = function (a) {
                var b, c, d;
                for (c = 0, d = a.length; c < d; c++) if (b = a[c], /(^| )fallback($| )/.test(b.className)) return b
            }, f = ["div", "form"], d = 0, e = f.length; d < e; d++) if (c = f[d], a = b(this.element.getElementsByTagName(c))) return a
        }, e.prototype.setupEventListeners = function () {
            var a, b, c, d, e, f, g;
            for (f = this.listeners, g = [], d = 0, e = f.length; d < e; d++) a = f[d], g.push(function () {
                var d, e;
                d = a.events, e = [];
                for (b in d) c = d[b], e.push(a.element.addEventListener(b, c, !1));
                return e
            }());
            return g
        }, e.prototype.removeEventListeners = function () {
            var a, b, c, d, e, f, g;
            for (f = this.listeners, g = [], d = 0, e = f.length; d < e; d++) a = f[d], g.push(function () {
                var d, e;
                d = a.events, e = [];
                for (b in d) c = d[b], e.push(a.element.removeEventListener(b, c, !1));
                return e
            }());
            return g
        }, e.prototype.disable = function () {
            var a, b, c, d, e;
            for (this.clickableElements.forEach(function (a) {
                return a.classList.remove("dz-clickable")
            }), this.removeEventListeners(), d = this.files, e = [], b = 0, c = d.length; b < c; b++) a = d[b], e.push(this.cancelUpload(a));
            return e
        }, e.prototype.enable = function () {
            return this.clickableElements.forEach(function (a) {
                return a.classList.add("dz-clickable")
            }), this.setupEventListeners()
        }, e.prototype.filesize = function (a) {
            var b, c, d, e, f, g, h, i;
            if (d = 0, e = "b", a > 0) {
                for (g = ["TB", "GB", "MB", "KB", "b"], c = h = 0, i = g.length; h < i; c = ++h) if (f = g[c], b = Math.pow(this.options.filesizeBase, 4 - c) / 10, a >= b) {
                    d = a / Math.pow(this.options.filesizeBase, 4 - c), e = f;
                    break
                }
                d = Math.round(10 * d) / 10
            }
            return "<strong>" + d + "</strong> " + e
        }, e.prototype._updateMaxFilesReachedClass = function () {
            return null != this.options.maxFiles && this.getAcceptedFiles().length >= this.options.maxFiles ? (this.getAcceptedFiles().length === this.options.maxFiles && this.emit("maxfilesreached", this.files), this.element.classList.add("dz-max-files-reached")) : this.element.classList.remove("dz-max-files-reached")
        }, e.prototype.drop = function (a) {
            var b, c;
            a.dataTransfer && (this.emit("drop", a), b = a.dataTransfer.files, this.emit("addedfiles", b), b.length && (c = a.dataTransfer.items, c && c.length && null != c[0].webkitGetAsEntry ? this._addFilesFromItems(c) : this.handleFiles(b)))
        }, e.prototype.paste = function (a) {
            var b, c;
            if (null != (null != a && null != (c = a.clipboardData) ? c.items : void 0)) return this.emit("paste", a), b = a.clipboardData.items, b.length ? this._addFilesFromItems(b) : void 0
        }, e.prototype.handleFiles = function (a) {
            var b, c, d, e;
            for (e = [], c = 0, d = a.length; c < d; c++) b = a[c], e.push(this.addFile(b));
            return e
        }, e.prototype._addFilesFromItems = function (a) {
            var b, c, d, e, f;
            for (f = [], d = 0, e = a.length; d < e; d++) c = a[d], null != c.webkitGetAsEntry && (b = c.webkitGetAsEntry()) ? b.isFile ? f.push(this.addFile(c.getAsFile())) : b.isDirectory ? f.push(this._addFilesFromDirectory(b, b.name)) : f.push(void 0) : null != c.getAsFile && (null == c.kind || "file" === c.kind) ? f.push(this.addFile(c.getAsFile())) : f.push(void 0);
            return f
        }, e.prototype._addFilesFromDirectory = function (a, b) {
            var c, d, e;
            return c = a.createReader(), d = function (a) {
                return "undefined" != typeof console && null !== console && "function" == typeof console.log ? console.log(a) : void 0
            }, (e = function (a) {
                return function () {
                    return c.readEntries(function (c) {
                        var d, f, g;
                        if (c.length > 0) {
                            for (f = 0, g = c.length; f < g; f++) d = c[f], d.isFile ? d.file(function (c) {
                                if (!a.options.ignoreHiddenFiles || "." !== c.name.substring(0, 1)) return c.fullPath = "" + b + "/" + c.name, a.addFile(c)
                            }) : d.isDirectory && a._addFilesFromDirectory(d, "" + b + "/" + d.name);
                            e()
                        }
                        return null
                    }, d)
                }
            }(this))()
        }, e.prototype.accept = function (a, b) {
            return a.size > 1024 * this.options.maxFilesize * 1024 ? b(this.options.dictFileTooBig.replace("{{filesize}}", Math.round(a.size / 1024 / 10.24) / 100).replace("{{maxFilesize}}", this.options.maxFilesize)) : e.isValidFile(a, this.options.acceptedFiles) ? null != this.options.maxFiles && this.getAcceptedFiles().length >= this.options.maxFiles ? (b(this.options.dictMaxFilesExceeded.replace("{{maxFiles}}", this.options.maxFiles)), this.emit("maxfilesexceeded", a)) : this.options.accept.call(this, a, b) : b(this.options.dictInvalidFileType)
        }, e.prototype.addFile = function (a) {
            return a.upload = {
                progress: 0,
                total: a.size,
                bytesSent: 0
            }, this.files.push(a), a.status = e.ADDED, this.emit("addedfile", a), this._enqueueThumbnail(a), this.accept(a, function (b) {
                return function (c) {
                    return c ? (a.accepted = !1, b._errorProcessing([a], c)) : (a.accepted = !0, b.options.autoQueue && b.enqueueFile(a)), b._updateMaxFilesReachedClass()
                }
            }(this))
        }, e.prototype.enqueueFiles = function (a) {
            var b, c, d;
            for (c = 0, d = a.length; c < d; c++) b = a[c], this.enqueueFile(b);
            return null
        }, e.prototype.enqueueFile = function (a) {
            if (a.status !== e.ADDED || a.accepted !== !0) throw new Error("This file can't be queued because it has already been processed or was rejected.");
            if (a.status = e.QUEUED, this.options.autoProcessQueue) return setTimeout(function (a) {
                return function () {
                    return a.processQueue()
                }
            }(this), 0)
        }, e.prototype._thumbnailQueue = [], e.prototype._processingThumbnail = !1, e.prototype._enqueueThumbnail = function (a) {
            if (this.options.createImageThumbnails && a.type.match(/image.*/) && a.size <= 1024 * this.options.maxThumbnailFilesize * 1024) return this._thumbnailQueue.push(a), setTimeout(function (a) {
                return function () {
                    return a._processThumbnailQueue()
                }
            }(this), 0)
        }, e.prototype._processThumbnailQueue = function () {
            if (!this._processingThumbnail && 0 !== this._thumbnailQueue.length) return this._processingThumbnail = !0, this.createThumbnail(this._thumbnailQueue.shift(), function (a) {
                return function () {
                    return a._processingThumbnail = !1, a._processThumbnailQueue()
                }
            }(this))
        }, e.prototype.removeFile = function (a) {
            if (a.status === e.UPLOADING && this.cancelUpload(a), this.files = h(this.files, a), this.emit("removedfile", a), 0 === this.files.length) return this.emit("reset")
        }, e.prototype.removeAllFiles = function (a) {
            var b, c, d, f;
            for (null == a && (a = !1), f = this.files.slice(), c = 0, d = f.length; c < d; c++) b = f[c], (b.status !== e.UPLOADING || a) && this.removeFile(b);
            return null
        }, e.prototype.createThumbnail = function (a, b) {
            var c;
            return c = new FileReader, c.onload = function (d) {
                return function () {
                    return "image/svg+xml" === a.type ? (d.emit("thumbnail", a, c.result), void (null != b && b())) : d.createThumbnailFromUrl(a, c.result, b)
                }
            }(this), c.readAsDataURL(a)
        }, e.prototype.createThumbnailFromUrl = function (a, b, c, d) {
            var e;
            return e = document.createElement("img"), d && (e.crossOrigin = d), e.onload = function (b) {
                return function () {
                    var d, g, h, i, j, k, l, m;
                    if (a.width = e.width, a.height = e.height, h = b.options.resize.call(b, a), null == h.trgWidth && (h.trgWidth = h.optWidth), null == h.trgHeight && (h.trgHeight = h.optHeight), d = document.createElement("canvas"), g = d.getContext("2d"), d.width = h.trgWidth, d.height = h.trgHeight, f(g, e, null != (j = h.srcX) ? j : 0, null != (k = h.srcY) ? k : 0, h.srcWidth, h.srcHeight, null != (l = h.trgX) ? l : 0, null != (m = h.trgY) ? m : 0, h.trgWidth, h.trgHeight), i = d.toDataURL("image/png"), b.emit("thumbnail", a, i), null != c) return c()
                }
            }(this), null != c && (e.onerror = c), e.src = b
        }, e.prototype.processQueue = function () {
            var a, b, c, d;
            if (b = this.options.parallelUploads, c = this.getUploadingFiles().length, a = c, !(c >= b) && (d = this.getQueuedFiles(), d.length > 0)) {
                if (this.options.uploadMultiple) return this.processFiles(d.slice(0, b - c));
                for (; a < b;) {
                    if (!d.length) return;
                    this.processFile(d.shift()), a++
                }
            }
        }, e.prototype.processFile = function (a) {
            return this.processFiles([a])
        }, e.prototype.processFiles = function (a) {
            var b, c, d;
            for (c = 0, d = a.length; c < d; c++) b = a[c], b.processing = !0, b.status = e.UPLOADING, this.emit("processing", b);
            return this.options.uploadMultiple && this.emit("processingmultiple", a), this.uploadFiles(a)
        }, e.prototype._getFilesWithXhr = function (a) {
            var b, c;
            return c = function () {
                var c, d, e, f;
                for (e = this.files, f = [], c = 0, d = e.length; c < d; c++) b = e[c], b.xhr === a && f.push(b);
                return f
            }.call(this)
        }, e.prototype.cancelUpload = function (a) {
            var b, c, d, f, g, h, i;
            if (a.status === e.UPLOADING) {
                for (c = this._getFilesWithXhr(a.xhr), d = 0, g = c.length; d < g; d++) b = c[d], b.status = e.CANCELED;
                for (a.xhr.abort(), f = 0, h = c.length; f < h; f++) b = c[f], this.emit("canceled", b);
                this.options.uploadMultiple && this.emit("canceledmultiple", c)
            } else (i = a.status) !== e.ADDED && i !== e.QUEUED || (a.status = e.CANCELED, this.emit("canceled", a), this.options.uploadMultiple && this.emit("canceledmultiple", [a]));
            if (this.options.autoProcessQueue) return this.processQueue()
        }, d = function () {
            var a, b;
            return b = arguments[0], a = 2 <= arguments.length ? i.call(arguments, 1) : [], "function" == typeof b ? b.apply(this, a) : b
        }, e.prototype.uploadFile = function (a) {
            return this.uploadFiles([a])
        }, e.prototype.uploadFiles = function (a) {
            var b, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u, v, w, x, y, z, A, B, C, D, E, F, G, H, I, J, K, L;
            for (w = new XMLHttpRequest, x = 0, B = a.length; x < B; x++) b = a[x], b.xhr = w;
            p = d(this.options.method, a), u = d(this.options.url, a), w.open(p, u, !0), w.withCredentials = !!this.options.withCredentials, s = null, g = function (c) {
                return function () {
                    var d, e, f;
                    for (f = [], d = 0, e = a.length; d < e; d++) b = a[d], f.push(c._errorProcessing(a, s || c.options.dictResponseError.replace("{{statusCode}}", w.status), w));
                    return f
                }
            }(this), t = function (c) {
                return function (d) {
                    var e, f, g, h, i, j, k, l, m;
                    if (null != d) for (f = 100 * d.loaded / d.total, g = 0, j = a.length; g < j; g++) b = a[g], b.upload = {
                        progress: f,
                        total: d.total,
                        bytesSent: d.loaded
                    }; else {
                        for (e = !0, f = 100, h = 0, k = a.length; h < k; h++) b = a[h], 100 === b.upload.progress && b.upload.bytesSent === b.upload.total || (e = !1), b.upload.progress = f, b.upload.bytesSent = b.upload.total;
                        if (e) return
                    }
                    for (m = [], i = 0, l = a.length; i < l; i++) b = a[i], m.push(c.emit("uploadprogress", b, f, b.upload.bytesSent));
                    return m
                }
            }(this), w.onload = function (b) {
                return function (c) {
                    var d;
                    if (a[0].status !== e.CANCELED && 4 === w.readyState) {
                        if (s = w.responseText, w.getResponseHeader("content-type") && ~w.getResponseHeader("content-type").indexOf("application/json")) try {
                            s = JSON.parse(s)
                        } catch (a) {
                            c = a, s = "Invalid JSON response from server."
                        }
                        return t(), 200 <= (d = w.status) && d < 300 ? b._finished(a, s, c) : g()
                    }
                }
            }(this), w.onerror = function (b) {
                return function () {
                    if (a[0].status !== e.CANCELED) return g()
                }
            }(this), r = null != (G = w.upload) ? G : w, r.onprogress = t, j = {
                Accept: "application/json",
                "Cache-Control": "no-cache",
                "X-Requested-With": "XMLHttpRequest"
            }, this.options.headers && c(j, this.options.headers);
            for (h in j) i = j[h], i && w.setRequestHeader(h, i);
            if (f = new FormData, this.options.params) {
                H = this.options.params;
                for (o in H) v = H[o], f.append(o, v)
            }
            for (y = 0, C = a.length; y < C; y++) b = a[y], this.emit("sending", b, w, f);
            if (this.options.uploadMultiple && this.emit("sendingmultiple", a, w, f), "FORM" === this.element.tagName) for (I = this.element.querySelectorAll("input, textarea, select, button"), z = 0, D = I.length; z < D; z++) if (l = I[z], m = l.getAttribute("name"), n = l.getAttribute("type"), "SELECT" === l.tagName && l.hasAttribute("multiple")) for (J = l.options, A = 0, E = J.length; A < E; A++) q = J[A], q.selected && f.append(m, q.value); else (!n || "checkbox" !== (K = n.toLowerCase()) && "radio" !== K || l.checked) && f.append(m, l.value);
            for (k = F = 0, L = a.length - 1; 0 <= L ? F <= L : F >= L; k = 0 <= L ? ++F : --F) f.append(this._getParamName(k), a[k], this._renameFilename(a[k].name));
            return this.submitRequest(w, f, a)
        }, e.prototype.submitRequest = function (a, b, c) {
            return a.send(b)
        }, e.prototype._finished = function (a, b, c) {
            var d, f, g;
            for (f = 0, g = a.length; f < g; f++) d = a[f], d.status = e.SUCCESS, this.emit("success", d, b, c), this.emit("complete", d);
            if (this.options.uploadMultiple && (this.emit("successmultiple", a, b, c), this.emit("completemultiple", a)), this.options.autoProcessQueue) return this.processQueue()
        }, e.prototype._errorProcessing = function (a, b, c) {
            var d, f, g;
            for (f = 0, g = a.length; f < g; f++) d = a[f], d.status = e.ERROR, this.emit("error", d, b, c), this.emit("complete", d);
            if (this.options.uploadMultiple && (this.emit("errormultiple", a, b, c), this.emit("completemultiple", a)), this.options.autoProcessQueue) return this.processQueue()
        }, e
    }(b), a.version = "4.3.0", a.options = {}, a.optionsForElement = function (b) {
        return b.getAttribute("id") ? a.options[c(b.getAttribute("id"))] : void 0
    }, a.instances = [], a.forElement = function (a) {
        if ("string" == typeof a && (a = document.querySelector(a)), null == (null != a ? a.dropzone : void 0)) throw new Error("No Dropzone found for given element. This is probably because you're trying to access it before Dropzone had the time to initialize. Use the `init` option to setup any additional observers on your Dropzone.");
        return a.dropzone
    }, a.autoDiscover = !0, a.discover = function () {
        var b, c, d, e, f, g;
        for (document.querySelectorAll ? d = document.querySelectorAll(".dropzone") : (d = [], b = function (a) {
            var b, c, e, f;
            for (f = [], c = 0, e = a.length; c < e; c++) b = a[c], /(^| )dropzone($| )/.test(b.className) ? f.push(d.push(b)) : f.push(void 0);
            return f
        }, b(document.getElementsByTagName("div")), b(document.getElementsByTagName("form"))), g = [], e = 0, f = d.length; e < f; e++) c = d[e], a.optionsForElement(c) !== !1 ? g.push(new a(c)) : g.push(void 0);
        return g
    }, a.blacklistedBrowsers = [/opera.*Macintosh.*version\/12/i], a.isBrowserSupported = function () {
        var b, c, d, e, f;
        if (b = !0, window.File && window.FileReader && window.FileList && window.Blob && window.FormData && document.querySelector) if ("classList" in document.createElement("a")) for (f = a.blacklistedBrowsers, d = 0, e = f.length; d < e; d++) c = f[d], c.test(navigator.userAgent) && (b = !1); else b = !1; else b = !1;
        return b
    }, h = function (a, b) {
        var c, d, e, f;
        for (f = [], d = 0, e = a.length; d < e; d++) c = a[d], c !== b && f.push(c);
        return f
    }, c = function (a) {
        return a.replace(/[\-_](\w)/g, function (a) {
            return a.charAt(1).toUpperCase()
        })
    }, a.createElement = function (a) {
        var b;
        return b = document.createElement("div"), b.innerHTML = a, b.childNodes[0]
    }, a.elementInside = function (a, b) {
        if (a === b) return !0;
        for (; a = a.parentNode;) if (a === b) return !0;
        return !1
    }, a.getElement = function (a, b) {
        var c;
        if ("string" == typeof a ? c = document.querySelector(a) : null != a.nodeType && (c = a), null == c) throw new Error("Invalid `" + b + "` option provided. Please provide a CSS selector or a plain HTML element.");
        return c
    }, a.getElements = function (a, b) {
        var c, d, e, f, g, h, i, j;
        if (a instanceof Array) {
            e = [];
            try {
                for (f = 0, h = a.length; f < h; f++) d = a[f], e.push(this.getElement(d, b))
            } catch (a) {
                c = a, e = null
            }
        } else if ("string" == typeof a) for (e = [], j = document.querySelectorAll(a), g = 0, i = j.length; g < i; g++) d = j[g], e.push(d); else null != a.nodeType && (e = [a]);
        if (null == e || !e.length) throw new Error("Invalid `" + b + "` option provided. Please provide a CSS selector, a plain HTML element or a list of those.");
        return e
    }, a.confirm = function (a, b, c) {
        return window.confirm(a) ? b() : null != c ? c() : void 0
    }, a.isValidFile = function (a, b) {
        var c, d, e, f, g;
        if (!b) return !0;
        for (b = b.split(","), d = a.type, c = d.replace(/\/.*$/, ""), f = 0, g = b.length; f < g; f++) if (e = b[f], e = e.trim(), "." === e.charAt(0)) {
            if (a.name.toLowerCase().indexOf(e.toLowerCase(), a.name.length - e.length) !== -1) return !0
        } else if (/\/\*$/.test(e)) {
            if (c === e.replace(/\/.*$/, "")) return !0
        } else if (d === e) return !0;
        return !1
    }, "undefined" != typeof jQuery && null !== jQuery && (jQuery.fn.dropzone = function (b) {
        return this.each(function () {
            return new a(this, b)
        })
    }), "undefined" != typeof module && null !== module ? module.exports = a : window.Dropzone = a, a.ADDED = "added", a.QUEUED = "queued", a.ACCEPTED = a.QUEUED, a.UPLOADING = "uploading", a.PROCESSING = a.UPLOADING, a.CANCELED = "canceled", a.ERROR = "error", a.SUCCESS = "success", e = function (a) {
        var b, c, d, e, f, g, h, i, j, k;
        for (h = a.naturalWidth, g = a.naturalHeight, c = document.createElement("canvas"), c.width = 1, c.height = g, d = c.getContext("2d"), d.drawImage(a, 0, 0), e = d.getImageData(0, 0, 1, g).data, k = 0, f = g, i = g; i > k;) b = e[4 * (i - 1) + 3], 0 === b ? f = i : k = i, i = f + k >> 1;
        return j = i / g, 0 === j ? 1 : j
    }, f = function (a, b, c, d, f, g, h, i, j, k) {
        var l;
        return l = e(b), a.drawImage(b, c, d, f, g, h, i, j, k / l)
    }, d = function (a, b) {
        var c, d, e, f, g, h, i, j, k;
        if (e = !1, k = !0, d = a.document, j = d.documentElement, c = d.addEventListener ? "addEventListener" : "attachEvent", i = d.addEventListener ? "removeEventListener" : "detachEvent", h = d.addEventListener ? "" : "on", f = function (c) {
            if ("readystatechange" !== c.type || "complete" === d.readyState) return ("load" === c.type ? a : d)[i](h + c.type, f, !1), !e && (e = !0) ? b.call(a, c.type || c) : void 0
        }, g = function () {
            var a;
            try {
                j.doScroll("left")
            } catch (b) {
                return a = b, void setTimeout(g, 50)
            }
            return f("poll")
        }, "complete" !== d.readyState) {
            if (d.createEventObject && j.doScroll) {
                try {
                    k = !a.frameElement
                } catch (a) {
                }
                k && g()
            }
            return d[c](h + "DOMContentLoaded", f, !1), d[c](h + "readystatechange", f, !1), a[c](h + "load", f, !1)
        }
    }, a._autoDiscoverFunction = function () {
        if (a.autoDiscover) return a.discover()
    }, d(window, a._autoDiscoverFunction)
}).call(this);
