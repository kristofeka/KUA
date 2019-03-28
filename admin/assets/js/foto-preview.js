        function fotoAAA(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var fullPath = document.getElementById("fotosuami1").value;
                if (fullPath) {
                    var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                    var filename = fullPath.substring(startIndex);
                    if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                        filename = filename.substring(1);
                    }
                }
                reader.onload = function (e) {
                    $('#fotoAA').attr('src', e.target.result);
                    document.getElementById("textfotoAA").innerHTML = filename;
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        
        function fotoBBB(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var fullPath = document.getElementById("fotosuami2").value;
                if (fullPath) {
                    var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                    var filename = fullPath.substring(startIndex);
                    if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                        filename = filename.substring(1);
                    }
                }
                reader.onload = function (e) {
                    $('#fotoBB').attr('src', e.target.result);
                    document.getElementById("textfotoBB").innerHTML = filename;
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        function fotoktpp(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var fullPath = document.getElementById("filektpsuami").value;
                if (fullPath) {
                    var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                    var filename = fullPath.substring(startIndex);
                    if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                        filename = filename.substring(1);
                    }
                }
                reader.onload = function (e) {
                    $('#ktpsuami').attr('src', e.target.result);
                    document.getElementById("textktpp").innerHTML = filename;
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        function fotoktpwalip(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var fullPath = document.getElementById("filektpwalisuami").value;
                if (fullPath) {
                    var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                    var filename = fullPath.substring(startIndex);
                    if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                        filename = filename.substring(1);
                    }
                }
                reader.onload = function (e) {
                    $('#ktpwalisuami').attr('src', e.target.result);
                    document.getElementById("textktpwalip").innerHTML = filename;
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        function fotoktportup(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var fullPath = document.getElementById("filektportusuami").value;
                if (fullPath) {
                    var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                    var filename = fullPath.substring(startIndex);
                    if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                        filename = filename.substring(1);
                    }
                }
                reader.onload = function (e) {
                    $('#ktportusuami').attr('src', e.target.result);
                    document.getElementById("textktportup").innerHTML = filename;
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        function fotokkp(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var fullPath = document.getElementById("filekksuami").value;
                if (fullPath) {
                    var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                    var filename = fullPath.substring(startIndex);
                    if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                        filename = filename.substring(1);
                    }
                }
                reader.onload = function (e) {
                    $('#fckkp').attr('src', e.target.result);
                    document.getElementById("textkkp").innerHTML = filename;
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

                function fotoAA(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var fullPath = document.getElementById("fotoistri1").value;
                if (fullPath) {
                    var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                    var filename = fullPath.substring(startIndex);
                    if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                        filename = filename.substring(1);
                    }
                }
                reader.onload = function (e) {
                    $('#fotoA').attr('src', e.target.result);
                    document.getElementById("textfotoA").innerHTML = filename;
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        
        function fotoBB(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var fullPath = document.getElementById("fotoistri2").value;
                if (fullPath) {
                    var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                    var filename = fullPath.substring(startIndex);
                    if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                        filename = filename.substring(1);
                    }
                }
                reader.onload = function (e) {
                    $('#fotoB').attr('src', e.target.result);
                    document.getElementById("textfotoB").innerHTML = filename;
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        function fotoktp(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var fullPath = document.getElementById("filektpistri").value;
                if (fullPath) {
                    var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                    var filename = fullPath.substring(startIndex);
                    if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                        filename = filename.substring(1);
                    }
                }
                reader.onload = function (e) {
                    $('#ktpistri').attr('src', e.target.result);
                    document.getElementById("textktp").innerHTML = filename;
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        function fotoktpwali(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var fullPath = document.getElementById("filektpwaliistri").value;
                if (fullPath) {
                    var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                    var filename = fullPath.substring(startIndex);
                    if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                        filename = filename.substring(1);
                    }
                }
                reader.onload = function (e) {
                    $('#ktpwaliistri').attr('src', e.target.result);
                    document.getElementById("textktpwali").innerHTML = filename;
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        function fotoktportu(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var fullPath = document.getElementById("filektportuistri").value;
                if (fullPath) {
                    var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                    var filename = fullPath.substring(startIndex);
                    if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                        filename = filename.substring(1);
                    }
                }
                reader.onload = function (e) {
                    $('#ktportuistri').attr('src', e.target.result);
                    document.getElementById("textktportu").innerHTML = filename;
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        function fotokk(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var fullPath = document.getElementById("filekkistri").value;
                if (fullPath) {
                    var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                    var filename = fullPath.substring(startIndex);
                    if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                        filename = filename.substring(1);
                    }
                }
                reader.onload = function (e) {
                    $('#fckk').attr('src', e.target.result);
                    document.getElementById("textkk").innerHTML = filename;
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        function N1a(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var fullPath = document.getElementById("N1form").value;
                if (fullPath) {
                    var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                    var filename = fullPath.substring(startIndex);
                    if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                        filename = filename.substring(1);
                    }
                }
                reader.onload = function (e) {
                    document.getElementById("textN1").innerHTML = filename;
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        function N2a(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var fullPath = document.getElementById("N2form").value;
                if (fullPath) {
                    var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                    var filename = fullPath.substring(startIndex);
                    if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                        filename = filename.substring(1);
                    }
                }
                reader.onload = function (e) {
                    document.getElementById("textN2").innerHTML = filename;
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        function N3a(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var fullPath = document.getElementById("N3form").value;
                if (fullPath) {
                    var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                    var filename = fullPath.substring(startIndex);
                    if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                        filename = filename.substring(1);
                    }
                }
                reader.onload = function (e) {
                    document.getElementById("textN3").innerHTML = filename;
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        function N4a(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var fullPath = document.getElementById("N4form").value;
                if (fullPath) {
                    var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                    var filename = fullPath.substring(startIndex);
                    if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                        filename = filename.substring(1);
                    }
                }
                reader.onload = function (e) {
                    document.getElementById("textN4").innerHTML = filename;
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        function N5a(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var fullPath = document.getElementById("N5form").value;
                if (fullPath) {
                    var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                    var filename = fullPath.substring(startIndex);
                    if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                        filename = filename.substring(1);
                    }
                }
                reader.onload = function (e) {
                    document.getElementById("textN5").innerHTML = filename;
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        function N6a(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var fullPath = document.getElementById("N6form").value;
                if (fullPath) {
                    var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                    var filename = fullPath.substring(startIndex);
                    if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                        filename = filename.substring(1);
                    }
                }
                reader.onload = function (e) {
                    document.getElementById("textN6").innerHTML = filename;
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        function N7a(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var fullPath = document.getElementById("N7form").value;
                if (fullPath) {
                    var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                    var filename = fullPath.substring(startIndex);
                    if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                        filename = filename.substring(1);
                    }
                }
                reader.onload = function (e) {
                    document.getElementById("textN7").innerHTML = filename;
                }

                reader.readAsDataURL(input.files[0]);
            }
        }