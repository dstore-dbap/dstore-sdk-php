<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_CreateSimpleCampItemCond_Ad.proto

namespace GPBMetadata\Dstore\Engine\Procedures;

class OmCreateSimpleCampItemCondAd
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
            "0ac1180a3d6473746f72652f656e67696e652f70726f636564757265732f" .
            "6f6d5f43726561746553696d706c6543616d704974656d436f6e645f4164" .
            "2e70726f746f122c6473746f72652e656e67696e652e6f6d5f4372656174" .
            "6553696d706c6543616d704974656d436f6e645f41641a136473746f7265" .
            "2f76616c7565732e70726f746f1a1a6473746f72652f656e67696e652f65" .
            "6e67696e652e70726f746f2280130a0a506172616d657465727312300a0b" .
            "63616d706169676e5f696418012001280b321b2e6473746f72652e76616c" .
            "7565732e496e746567657256616c756512190a1063616d706169676e5f69" .
            "645f6e756c6c18e9072001280812390a15636f6e646974696f6e5f646573" .
            "6372697074696f6e18022001280b321a2e6473746f72652e76616c756573" .
            "2e537472696e6756616c756512230a1a636f6e646974696f6e5f64657363" .
            "72697074696f6e5f6e756c6c18ea072001280812310a0c636f6e64697469" .
            "6f6e5f696418032001280b321b2e6473746f72652e76616c7565732e496e" .
            "746567657256616c7565121a0a11636f6e646974696f6e5f69645f6e756c" .
            "6c18eb072001280812360a116974656d5f636f6e646974696f6e5f696418" .
            "042001280b321b2e6473746f72652e76616c7565732e496e746567657256" .
            "616c7565121f0a166974656d5f636f6e646974696f6e5f69645f6e756c6c" .
            "18ec0720012808123c0a176974656d5f636f6e646974696f6e5f67726f75" .
            "705f696418052001280b321b2e6473746f72652e76616c7565732e496e74" .
            "6567657256616c756512250a1c6974656d5f636f6e646974696f6e5f6772" .
            "6f75705f69645f6e756c6c18ed0720012808123b0a166974656d5f636f6e" .
            "646974696f6e5f706172745f696418062001280b321b2e6473746f72652e" .
            "76616c7565732e496e746567657256616c756512240a1b6974656d5f636f" .
            "6e646974696f6e5f706172745f69645f6e756c6c18ee0720012808122d0a" .
            "096c6576656c5f69647318072001280b321a2e6473746f72652e76616c75" .
            "65732e537472696e6756616c756512170a0e6c6576656c5f6964735f6e75" .
            "6c6c18ef072001280812380a14646f6d61696e5f747265655f6e6f64655f" .
            "69647318082001280b321a2e6473746f72652e76616c7565732e53747269" .
            "6e6756616c756512220a19646f6d61696e5f747265655f6e6f64655f6964" .
            "735f6e756c6c18f00720012808123b0a166e6f64655f6368617261637465" .
            "7269737469635f696418092001280b321b2e6473746f72652e76616c7565" .
            "732e496e746567657256616c756512240a1b6e6f64655f63686172616374" .
            "657269737469635f69645f6e756c6c18f10720012808122d0a096f706572" .
            "61746f7231180a2001280b321a2e6473746f72652e76616c7565732e5374" .
            "72696e6756616c756512170a0e6f70657261746f72315f6e756c6c18f207" .
            "20012808122e0a0a636f6e646974696f6e31180b2001280b321a2e647374" .
            "6f72652e76616c7565732e537472696e6756616c756512180a0f636f6e64" .
            "6974696f6e315f6e756c6c18f30720012808122d0a096f70657261746f72" .
            "32180c2001280b321a2e6473746f72652e76616c7565732e537472696e67" .
            "56616c756512170a0e6f70657261746f72325f6e756c6c18f40720012808" .
            "122e0a0a636f6e646974696f6e32180d2001280b321a2e6473746f72652e" .
            "76616c7565732e537472696e6756616c756512180a0f636f6e646974696f" .
            "6e325f6e756c6c18f5072001280812320a0d696e68657269745f64657074" .
            "68180e2001280b321b2e6473746f72652e76616c7565732e496e74656765" .
            "7256616c7565121b0a12696e68657269745f64657074685f6e756c6c18f6" .
            "072001280812390a147265637572736976655f6576616c756174696f6e18" .
            "0f2001280b321b2e6473746f72652e76616c7565732e496e746567657256" .
            "616c756512220a197265637572736976655f6576616c756174696f6e5f6e" .
            "756c6c18f70720012808122b0a07636f756e74727918102001280b321a2e" .
            "6473746f72652e76616c7565732e537472696e6756616c756512150a0c63" .
            "6f756e7472795f6e756c6c18f8072001280812420a1e657874656e646564" .
            "5f636f6e646974696f6e5f6465736372697074696f6e18112001280b321a" .
            "2e6473746f72652e76616c7565732e537472696e6756616c7565122c0a23" .
            "657874656e6465645f636f6e646974696f6e5f6465736372697074696f6e" .
            "5f6e756c6c18f9072001280812380a136d696e5f6e756d6265725f6f665f" .
            "6974656d7318122001280b321b2e6473746f72652e76616c7565732e496e" .
            "746567657256616c756512210a186d696e5f6e756d6265725f6f665f6974" .
            "656d735f6e756c6c18fa072001280812380a136d61785f6e756d6265725f" .
            "6f665f6974656d7318132001280b321b2e6473746f72652e76616c756573" .
            "2e496e746567657256616c756512210a186d61785f6e756d6265725f6f66" .
            "5f6974656d735f6e756c6c18fb072001280812320a0d66726f6d5f717561" .
            "6e7469747918142001280b321b2e6473746f72652e76616c7565732e496e" .
            "746567657256616c7565121b0a1266726f6d5f7175616e746974795f6e75" .
            "6c6c18fc072001280812300a0b746f5f7175616e7469747918152001280b" .
            "321b2e6473746f72652e76616c7565732e496e746567657256616c756512" .
            "190a10746f5f7175616e746974795f6e756c6c18fd0720012808123a0a15" .
            "66726f6d5f6974656d5f62617369635f707269636518162001280b321b2e" .
            "6473746f72652e76616c7565732e446563696d616c56616c756512230a1a" .
            "66726f6d5f6974656d5f62617369635f70726963655f6e756c6c18fe0720" .
            "01280812380a13746f5f6974656d5f62617369635f707269636518172001" .
            "280b321b2e6473746f72652e76616c7565732e446563696d616c56616c75" .
            "6512210a18746f5f6974656d5f62617369635f70726963655f6e756c6c18" .
            "ff072001280812390a1466726f6d5f62617369635f70726963655f73756d" .
            "18182001280b321b2e6473746f72652e76616c7565732e446563696d616c" .
            "56616c756512220a1966726f6d5f62617369635f70726963655f73756d5f" .
            "6e756c6c1880082001280812370a12746f5f62617369635f70726963655f" .
            "73756d18192001280b321b2e6473746f72652e76616c7565732e44656369" .
            "6d616c56616c756512200a17746f5f62617369635f70726963655f73756d" .
            "5f6e756c6c1881082001280812470a22636f6d62696e655f67726f757073" .
            "5f776974685f615f6e5f645f6f70657261746f72181a2001280b321b2e64" .
            "73746f72652e76616c7565732e426f6f6c65616e56616c756512300a2763" .
            "6f6d62696e655f67726f7570735f776974685f615f6e5f645f6f70657261" .
            "746f725f6e756c6c1882082001280812460a21636f6d62696e655f706172" .
            "74735f776974685f615f6e5f645f6f70657261746f72181b2001280b321b" .
            "2e6473746f72652e76616c7565732e426f6f6c65616e56616c7565122f0a" .
            "26636f6d62696e655f70617274735f776974685f615f6e5f645f6f706572" .
            "61746f725f6e756c6c1883082001280822b4030a08526573706f6e736512" .
            "380a106d6574615f696e666f726d6174696f6e18022003280b321e2e6473" .
            "746f72652e656e67696e652e4d657461496e666f726d6174696f6e12270a" .
            "076d65737361676518032003280b32162e6473746f72652e656e67696e65" .
            "2e4d65737361676512470a03726f7718042003280b323a2e6473746f7265" .
            "2e656e67696e652e6f6d5f43726561746553696d706c6543616d70497465" .
            "6d436f6e645f41642e526573706f6e73652e526f7712310a0c636f6e6469" .
            "74696f6e5f696418652001280b321b2e6473746f72652e76616c7565732e" .
            "496e746567657256616c756512360a116974656d5f636f6e646974696f6e" .
            "5f696418662001280b321b2e6473746f72652e76616c7565732e496e7465" .
            "67657256616c7565123c0a176974656d5f636f6e646974696f6e5f67726f" .
            "75705f696418672001280b321b2e6473746f72652e76616c7565732e496e" .
            "746567657256616c7565123b0a166974656d5f636f6e646974696f6e5f70" .
            "6172745f696418682001280b321b2e6473746f72652e76616c7565732e49" .
            "6e746567657256616c75651a160a03526f77120f0a06726f775f69641890" .
            "4e20012805425f0a1b696f2e6473746f72652e656e67696e652e70726f63" .
            "6564757265735a40676f73646b2e6473746f72652e64652f656e67696e65" .
            "2f70726f636564757265732f6f6d5f43726561746553696d706c6543616d" .
            "704974656d436f6e645f4164620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
