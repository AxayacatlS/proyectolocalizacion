<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>
    <script src="https://unpkg.com/aframe-look-at-component@0.8.0/dist/aframe-look-at-component.min.js"></script>
    <script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar-nft.js"></script>
  </head>

  <body style="margin: 0; overflow: hidden;">
    <a-scene
      vr-mode-ui="enabled: false"
      embedded
      arjs="sourceType: webcam; debugUIEnabled: false;"
    >
      <a-text
        value="Mejillon"
        look-at="[gps-camera]"
        scale="20 20 20"
      ></a-text>
	  <a-entity gltf-model="concha.glb" look-at="[gps-camera]" scale="10 10 10" position="0 0.5 -3" rotation="0 0 0"></a-entity>
      <a-camera gps-camera rotation-reader> </a-camera>
    </a-scene>
  </body>
</html>
