<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_ModifyConditionParts_Ad.proto

namespace GPBMetadata\Dstore\Engine\Procedures;

class ImModifyConditionPartsAd
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Dstore\Values::initOnce();
        \GPBMetadata\Dstore\Engine\Engine::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a980e0a396473746f72652f656e67696e652f70726f636564757265732f" .
            "696d5f4d6f64696679436f6e646974696f6e50617274735f41642e70726f" .
            "746f12286473746f72652e656e67696e652e696d5f4d6f64696679436f6e" .
            "646974696f6e50617274735f41641a136473746f72652f76616c7565732e" .
            "70726f746f1a1a6473746f72652f656e67696e652f656e67696e652e7072" .
            "6f746f22cc090a0a506172616d657465727312360a11636f6e646974696f" .
            "6e5f706172745f696418012001280b321b2e6473746f72652e76616c7565" .
            "732e496e746567657256616c7565121f0a16636f6e646974696f6e5f7061" .
            "72745f69645f6e756c6c18e90720012808123e0a1a636f6e646974696f6e" .
            "5f706172745f6465736372697074696f6e18022001280b321a2e6473746f" .
            "72652e76616c7565732e537472696e6756616c756512280a1f636f6e6469" .
            "74696f6e5f706172745f6465736372697074696f6e5f6e756c6c18ea0720" .
            "012808122d0a096c6576656c5f69647318032001280b321a2e6473746f72" .
            "652e76616c7565732e537472696e6756616c756512170a0e6c6576656c5f" .
            "6964735f6e756c6c18eb072001280812380a14646f6d61696e5f74726565" .
            "5f6e6f64655f69647318042001280b321a2e6473746f72652e76616c7565" .
            "732e537472696e6756616c756512220a19646f6d61696e5f747265655f6e" .
            "6f64655f6964735f6e756c6c18ec0720012808123b0a166e6f64655f6368" .
            "6172616374657269737469635f696418052001280b321b2e6473746f7265" .
            "2e76616c7565732e496e746567657256616c756512240a1b6e6f64655f63" .
            "686172616374657269737469635f69645f6e756c6c18ed0720012808122d" .
            "0a096f70657261746f723118062001280b321a2e6473746f72652e76616c" .
            "7565732e537472696e6756616c756512170a0e6f70657261746f72315f6e" .
            "756c6c18ee0720012808122e0a0a636f6e646974696f6e3118072001280b" .
            "321a2e6473746f72652e76616c7565732e537472696e6756616c75651218" .
            "0a0f636f6e646974696f6e315f6e756c6c18ef0720012808122d0a096f70" .
            "657261746f723218082001280b321a2e6473746f72652e76616c7565732e" .
            "537472696e6756616c756512170a0e6f70657261746f72325f6e756c6c18" .
            "f00720012808122e0a0a636f6e646974696f6e3218092001280b321a2e64" .
            "73746f72652e76616c7565732e537472696e6756616c756512180a0f636f" .
            "6e646974696f6e325f6e756c6c18f1072001280812320a0d696e68657269" .
            "745f6465707468180a2001280b321b2e6473746f72652e76616c7565732e" .
            "496e746567657256616c7565121b0a12696e68657269745f64657074685f" .
            "6e756c6c18f2072001280812390a147265637572736976655f6576616c75" .
            "6174696f6e180b2001280b321b2e6473746f72652e76616c7565732e496e" .
            "746567657256616c756512220a197265637572736976655f6576616c7561" .
            "74696f6e5f6e756c6c18f30720012808123a0a1564656c6574655f636f6e" .
            "646974696f6e5f70617274180c2001280b321b2e6473746f72652e76616c" .
            "7565732e426f6f6c65616e56616c756512230a1a64656c6574655f636f6e" .
            "646974696f6e5f706172745f6e756c6c18f40720012808122b0a07636f75" .
            "6e747279180d2001280b321a2e6473746f72652e76616c7565732e537472" .
            "696e6756616c756512150a0c636f756e7472795f6e756c6c18f507200128" .
            "0812470a22636f6e646974696f6e5f706172745f69645f776974685f7361" .
            "6d655f636f6e666967180e2001280b321b2e6473746f72652e76616c7565" .
            "732e496e746567657256616c756512300a27636f6e646974696f6e5f7061" .
            "72745f69645f776974685f73616d655f636f6e6669675f6e756c6c18f607" .
            "2001280822cb020a08526573706f6e736512380a106d6574615f696e666f" .
            "726d6174696f6e18022003280b321e2e6473746f72652e656e67696e652e" .
            "4d657461496e666f726d6174696f6e12270a076d65737361676518032003" .
            "280b32162e6473746f72652e656e67696e652e4d65737361676512430a03" .
            "726f7718042003280b32362e6473746f72652e656e67696e652e696d5f4d" .
            "6f64696679436f6e646974696f6e50617274735f41642e526573706f6e73" .
            "652e526f7712360a11636f6e646974696f6e5f706172745f696418652001" .
            "280b321b2e6473746f72652e76616c7565732e496e746567657256616c75" .
            "6512470a22636f6e646974696f6e5f706172745f69645f776974685f7361" .
            "6d655f636f6e66696718662001280b321b2e6473746f72652e76616c7565" .
            "732e496e746567657256616c75651a160a03526f77120f0a06726f775f69" .
            "6418904e20012805425b0a1b696f2e6473746f72652e656e67696e652e70" .
            "726f636564757265735a3c676f73646b2e6473746f72652e64652f656e67" .
            "696e652f70726f636564757265732f696d5f4d6f64696679436f6e646974" .
            "696f6e50617274735f4164620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

